<template lang="html">
  <div class="row">
    <div class="ibox">
        <div class="ibox-title">
            <h5><blockquote>{{ $t('el.page.all_applications') }}</blockquote></h5>
            <div class="ibox-tools">
                <router-link to="/applicat" class="btn btn-primary btn-xs">
                  {{ $t('el.form.create_applicat') }}
                </router-link>
            </div>
        </div>
        <div class="ibox-content">
            <!-- 搜索控件 -->
            <div class="row">
                <!-- <div class="col-md-1 col-sm-1 col-xs-3" :class="{'no-padding': isPhone}">
                    <div class="btn-group">
                        <el-button type="primary" size="small" style="padding:8px 9px" :loading="showLoading" icon="ion-refresh" @click="loadData">
                          <i class="ion-refresh" v-if="!showLoading"></i> {{ loading_text }}
                        </el-button>
                    </div>
                </div> -->
                <div class="col-md-12 col-sm-12 col-xs-12" :class="{'no-padding': isPhone}">
                    <div class="input-group">
                        <span class="input-group-btn" style="width: 81px;">
                          <button class="btn btn-sm btn-default" @click="loadData" type="button" style="width: 81px;"><i :class="showLoading ? 'el-icon-loading': 'ion-refresh'"></i> {{ loading_text }}</button>
                        </span>
                        <input type="text" v-model="keyWord" :placeholder="$t('el.form.review_filter_placeholder')" class="input-sm form-control" style="height: 31px">
                        <span class="input-group-btn">
                          <button class="btn btn-sm btn-default" type="button">{{ $t('el.page.search') }}</button>
                        </span>
                        <!-- <button type="button" @click="search" class="btn btn-sm btn-primary"> {{ $t('el.page.search') }}</button> </span> -->
                    </div>
                </div>
            </div>
            <!-- 搜索控件END -->
            <hr style="margin-bottom: 0; margin-top: 10px">
            <div class="project-list">

                <table id="apply-manage" class="table table-hover">
                    <tbody>
                      <template v-if="applicats.length > 0">
                        <!-- 手机ui -->
                        <template v-if="isPhone">
                          <tr class="row" style="border-bottom: 1px solid #aac0da;" v-for="(applicat, index) in applicatlist">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h5 class="panel-title">
                                  <Status :statusClass="false" :status="applicat.status"></Status>
                                  <router-link :to="$route.path + '/details/' + applicat.id" style="line-height: 16px;font-size: 12px;">
                                    {{ applicat.mechanism }} - {{ applicat.type }}
                                  </router-link>
                                </h5>
                              </div>
                              <div class="panel-body" style="text-align: center;">
                                <el-steps center :space="110" :active="applicat.stage" finish-status="success"  v-if="applicat.status != '审核通过' && applicat.status != '已结束'">
                                  <el-step v-for="(role, index) in applicat.roles.data"
                                    :title="role.display_name"
                                    :key="index"
                                    :status="(applicat.status == '审核不通过' && index == applicat.stage-1) ? 'error' : '' "
                                    ></el-step>
                                </el-steps>
                                <template v-else>
                                      <el-rate
                                        v-model="applicat.appraisal.data.score"
                                        disabled-void-color="#b0b1b3"
                                        disabled
                                        v-if="applicat.status == '已结束'"
                                        >
                                      </el-rate>
                                      <img src="../../../../../public/images/pass.png" width="90%" v-else>
                                </template>
                              </div>
                              <div class="panel-footer">
                                <router-link :to="$route.path + '/details/' + applicat.id" style="margin-right: 10px;">
                                    <el-button  type="text" size="small">{{ $t('el.form.look') }}</el-button>
                                </router-link>
                                <!-- 放弃申请 -->
                                <el-popover
                                   v-if="applicat.status == '待审核' || applicat.status == '审核中'"
                                   placement="top"
                                   trigger="click"
                                   width="160">
                                   <p>确定放弃这条申请吗？</p>
                                   <div style="text-align: right; margin: 0">
                                     <el-button type="primary" size="mini" @click="cancelApplicat(applicat)">{{$t('el.messagebox.confirm')}}</el-button>
                                   </div>
                                   <el-button slot="reference" type="text" size="small" style="float:right">{{$t('el.form.cancel')}}</el-button>
                                </el-popover>
                                <!-- 放弃申请END -->

                                <!-- 删除申请 -->
                                <el-popover
                                   v-else
                                   placement="top"
                                   trigger="click"
                                   width="160">
                                   <p>确定删除这条申请吗？</p>
                                   <div style="text-align: right; margin: 0">
                                     <el-button type="primary" size="mini" @click="removeApplicat(applicat, index)">{{$t('el.messagebox.confirm')}}</el-button>
                                   </div>
                                   <el-button slot="reference" type="text" size="small" style="float:right">{{$t('el.form.delete')}}</el-button>
                                </el-popover>
                              </div>
                            </div>
                          </tr>
                        </template>
                        <!-- 手机uiEND -->
                        <template v-else>
                            <tr v-for="(applicat, index) in applicatlist">
                                <td><Status :status="applicat.status"></Status></td>
                                <td class="project-title col-md-4">
                                    <router-link :to="$route.path + '/details/' + applicat.id">
                                      {{ applicat.mechanism }} - {{ applicat.type }}
                                    </router-link>
                                    <br/>
                                    <small>{{ $t('el.table.created_at') + ' ' + applicat.created_at }}</small>
                                </td>
                                <td class="project-roles col-md-5" v-if="applicat.status != '审核通过' && applicat.status != '已结束'">
                                  <el-steps :space="150" :active="applicat.stage" :direction="isPhone ? 'vertical' : 'horizontal'" finish-status="success">
                                    <el-step v-for="(role, index) in applicat.roles.data"
                                      :description="role.display_name"
                                      :key="index"
                                      :status="(applicat.status == '审核不通过' && index == applicat.stage-1) ? 'error' : '' "></el-step>
                                  </el-steps>
                                </td>
                                <template v-else>
                                    <td v-if="applicat.status == '已结束'">
                                      <el-rate
                                        v-model="applicat.appraisal.data.score"
                                        disabled-void-color="#b0b1b3"
                                        disabled
                                        >
                                      </el-rate>
                                    </td>
                                    <td v-else>
                                      <img src="../../../../../public/images/pass.png" width=350 height=48 alt="">
                                    </td>
                                </template>
                                <td class="project-actions col-md-2">
                                  <router-link :to="$route.path + '/details/' + applicat.id" style="margin-right: 10px;">
                                      <el-button  type="text" size="small">{{ $t('el.form.look') }}</el-button>
                                      <!-- <i class="btn btn-white btn-sm ion-folder"> {{ $t('el.form.look') }}</i> -->
                                  </router-link>
                                  <el-popover
                                     v-show="applicat.status == '待审核' || applicat.status == '审核中'"
                                     placement="top"
                                     trigger="click"
                                     width="160"
                                     :value="show">
                                     <p>确定放弃这条申请吗？</p>
                                     <div style="text-align: right; margin: 0">
                                       <el-button type="primary" size="mini" @click="cancelApplicat(applicat)">{{$t('el.messagebox.confirm')}}</el-button>
                                     </div>
                                     <el-button slot="reference" type="text" size="small" style="float:right">{{$t('el.form.cancel')}}</el-button>
                                  </el-popover>

                                  <el-popover
                                     v-show="applicat.status != '待审核' && applicat.status != '审核中'"
                                     placement="top"
                                     trigger="click"
                                     width="160"
                                     :value="show">
                                     <p>确定删除这条申请吗？</p>
                                     <div style="text-align: right; margin: 0">
                                       <el-button type="primary" size="mini" @click="removeApplicat(applicat, index)">{{$t('el.messagebox.confirm')}}</el-button>
                                     </div>
                                     <el-button slot="reference" type="text" size="small" style="float:right">{{$t('el.form.delete')}}</el-button>
                                  </el-popover>
                                </td>
                            </tr>
                          </template>
                        </template>
                        </tbody>
                    </table>
                      <h3 class="none text-center" v-if="applicats.length == 0">{{ $t('el.page.nothing') }}</h3>
                </div>
                <div class="row">
                  <nav class="text-center">
                      <div v-if="applicats.length < 1"></div>
                      <template v-else>
                          <el-pagination
                          v-if="!isPhone"
                          @size-change="handleSizeChange"
                          @current-change="handleCurrentChange"
                          :current-page="currentPage"
                          :page-sizes="[10, 20, 50, 100]"
                          :page-size="pageSize"
                          :layout="'total, sizes, prev, pager, next, jumper'"
                          :total="total">
                        </el-pagination>

                        <el-pagination
                        v-else
                        :small="true"
                        @current-change="handleCurrentChange"
                        :current-page="currentPage"
                        :layout="'prev, pager, next'"
                        :total="total">
                      </el-pagination>
                    </template>
                </nav>
              </div>
            </div>
        </div>
    </div>
</template>

<script>
  import { mapState } from 'vuex'
  import Status from '../../components/Status'
  export default {
      data() {
          return {
              applicats: [],
              roles: [],
              total: 0,
              totalPage: 0,
              showLoading: false,
              loading_text: '',
              currentPage: 0,
              pageSize: 10,
              keyWord: '',
              query: {},
              popoverVisible: false,
              show: false,
          }
      },
      created() {
          this.currentPage = this.$route.query.page;
          this.pageSize = parseInt(this.$route.query.pageSize);
          this.loadData();
      },
      components: {
          Status
      },
      computed: {
          ...mapState([
              'isPhone'
          ]),
          applicatlist:function(){
              let vm = this;
              return this.applicats.filter(function(item){
                  if((item.mechanism+'-'+item.type)
                  .indexOf(vm.keyWord) >= 0 || item.principal
                  .indexOf(vm.keyWord) >= 0) {
                      return true;
                  }
                  return false;
              })
          }
      },
      methods: {
          // 加载数据
          loadData() {
              this.showLoading = true;
              this.loading_text = this.$t('el.form.loading');
              var url = '/api/applicat?include=roles,appraisal';

              if (this.currentPage) {
                  let page = ''
                  if (url.indexOf('?') != -1) {
                      page = '&page='
                  } else {
                      page = '?page='
                  }
                  url = url + page + this.currentPage;
                  this.query.page = this.currentPage+''
                  this.$router.push({path:'applicat-manage', query:this.query})
              }

              if (this.keyWord) {
                  let keyWord = '';
                  if (url.indexOf('?') != -1) {
                      keyWord = '&keyWord='
                  } else {
                      keyWord = '?keyWord='
                  }
                  url = url + keyWord + this.keyWord;
                  this.query.keyWord = this.keyWord
                  this.$router.replace({path:'applicat-manage', query:this.query})
              }

              if (this.pageSize > 10) {
                  let pageSize = ''
                  if (url.indexOf('?') != -1) {
                      pageSize = '&pageSize='
                  } else {
                      pageSize = '?pageSize='
                  }
                  url = url + pageSize + this.pageSize;
                  this.query.pageSize = this.pageSize+''
                  this.$router.push({path:'applicat-manage', query:this.query})
              }

              axios.get(url).then(response => {
                      this.showLoading = false;
                      this.loading_text = this.$t('el.form.refresh');
                      this.applicats = response.data.data
                      this.totalPage = response.data.meta.pagination.total_pages
                      this.currentPage = response.data.meta.pagination.current_page
                      this.total = response.data.meta.pagination.total
              })
          },
          handleSizeChange(val) {
              this.pageSize = val;
              // this.loadData();
              this.$router.push({ path: this.$route.fullPath, query: { pageSize: val }});
         },
         handleCurrentChange(val) {
             //currentPage 改变时会触发
             this.currentPage = val;
            //  this.loadData();
             this.$router.push({ path: this.$route.fullPath, query: { page: val }});
         },
         search() {
            //搜索
            if(this.keyWord){
                this.loadData();
            }
         },
         //取消申请
         cancelApplicat(applicat) {
            this.show = false;
            axios.put('/api/applicat/'+ applicat.id + '/cancel',{'status':'已取消'}).then( response => {
                toastr.success(this.$t('el.notification.applicat_cancel'));
                //更改该申请状态
                applicat.status = '已取消';
                console.log(2);
            })
         },
         //删除申请
         removeApplicat(applicat, index) {
            this.show = false;
            axios.delete('/api/applicat/'+ applicat.id +'/softdelete').then( response => {
                this.applicats.splice(index,1);
                toastr.success(this.$t('el.notification.applicat_remove'));
            }, error => {
                toastr.error(error.response.status + ' : Resource ' + error.response.statusText)
            })
         }
      }
  }
</script>

<style lang="css" scoped>
  .none {
      color: #ECF0F1;
      padding-bottom: 20px;
  }
  .progress-mini, .progress-mini .progress-bar {
      height: 5px;
      margin-bottom: 0px;
  }
  .progress-small, .progress-mini {
      margin-top: 5px;
  }
  .progress-bar {
      background-color: #23b7e5;
  }
  .project-list table tr td {
      border-top: none;
      border-bottom: 1px solid #e7eaec;
      padding: 15px 10px;
      vertical-align: middle;
  }

  .project-title a {
      font-size: 14px;
      color: #676a6c;
      font-weight: 600;
  }
  .btn-white {
      color: inherit;
      background: white;
      border: 1px solid #e7eaec;
  }
  .project-actions {
      text-align: right;
  }
  .el-step__description {
      margin-top: 5px;
  }
  #apply-manage .row .title{
      width: 100%;
      line-height: 30px;
      margin-bottom: 5px;
      background: #ebf2f7;
  }
  .no-padding {
      padding-left: 0;
      padding-right: 0;
  }
  .panel-title {
      font-size: 1em;
  }
  #apply-manage td:nth-child(3) {
      text-align: center;
  }
</style>
