webpackJsonp([3],{"8hum":function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s,i=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var a=arguments[e];for(var s in a)Object.prototype.hasOwnProperty.call(a,s)&&(t[s]=a[s])}return t},r=a("NYxO"),l=a("qLXb"),o=(s=l)&&s.__esModule?s:{default:s};e.default={data:function(){return{applicats:[],roles:[],total:0,totalPage:0,showLoading:!1,loading_text:"",currentPage:0,pageSize:10,keyWord:"",query:{},popoverVisible:!1,show:!1}},created:function(){this.currentPage=this.$route.query.page,this.pageSize=parseInt(this.$route.query.pageSize),this.loadData()},components:{Status:o.default},computed:i({},(0,r.mapState)(["isPhone"]),{applicatlist:function(){var t=this;return this.applicats.filter(function(e){return(e.mechanism+"-"+e.type).indexOf(t.keyWord)>=0||e.principal.indexOf(t.keyWord)>=0})}}),methods:{loadData:function(){var t=this;this.showLoading=!0,this.loading_text=this.$t("el.form.loading");var e="/api/applicat?include=roles,appraisal";if(this.currentPage){e=e+(-1!=e.indexOf("?")?"&page=":"?page=")+this.currentPage,this.query.page=this.currentPage+"",this.$router.push({path:"applicat-manage",query:this.query})}if(this.keyWord){e=e+(-1!=e.indexOf("?")?"&keyWord=":"?keyWord=")+this.keyWord,this.query.keyWord=this.keyWord,this.$router.replace({path:"applicat-manage",query:this.query})}if(this.pageSize>10){e=e+(-1!=e.indexOf("?")?"&pageSize=":"?pageSize=")+this.pageSize,this.query.pageSize=this.pageSize+"",this.$router.push({path:"applicat-manage",query:this.query})}axios.get(e).then(function(e){t.showLoading=!1,t.loading_text=t.$t("el.form.refresh"),t.applicats=e.data.data,t.totalPage=e.data.meta.pagination.total_pages,t.currentPage=e.data.meta.pagination.current_page,t.total=e.data.meta.pagination.total})},handleSizeChange:function(t){this.pageSize=t,this.$router.push({path:this.$route.fullPath,query:{pageSize:t}})},handleCurrentChange:function(t){this.currentPage=t,this.$router.push({path:this.$route.fullPath,query:{page:t}})},search:function(){this.keyWord&&this.loadData()},cancelApplicat:function(t){var e=this;this.show=!1,axios.put("/api/applicat/"+t.id+"/cancel",{status:"已取消"}).then(function(a){toastr.success(e.$t("el.notification.applicat_cancel")),t.status="已取消",console.log(2)})},removeApplicat:function(t,e){var a=this;this.show=!1,axios.delete("/api/applicat/"+t.id+"/softdelete").then(function(t){a.applicats.splice(e,1),toastr.success(a.$t("el.notification.applicat_remove"))},function(t){toastr.error(t.response.status+" : Resource "+t.response.statusText)})}}}},"8njy":function(t,e,a){var s=a("HIzp");"string"==typeof s&&(s=[[t.i,s,""]]),s.locals&&(t.exports=s.locals);a("rjj0")("d86f6616",s,!0,{})},HIzp:function(t,e,a){(t.exports=a("FZ+f")(!1)).push([t.i,".status{margin-left:8px}",""])},SHrH:function(t,e,a){t.exports={render:function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"row"},[s("div",{staticClass:"ibox"},[s("div",{staticClass:"ibox-title"},[s("h5",[s("blockquote",[t._v(t._s(t.$t("el.page.all_applications")))])]),t._v(" "),s("div",{staticClass:"ibox-tools"},[s("router-link",{staticClass:"btn btn-primary btn-xs",attrs:{to:"/applicat"}},[t._v("\n                "+t._s(t.$t("el.form.create_applicat"))+"\n              ")])],1)]),t._v(" "),s("div",{staticClass:"ibox-content"},[s("div",{staticClass:"row"},[s("div",{staticClass:"col-md-12 col-sm-12 col-xs-12",class:{"no-padding":t.isPhone}},[s("div",{staticClass:"input-group"},[s("span",{staticClass:"input-group-btn",staticStyle:{width:"81px"}},[s("button",{staticClass:"btn btn-sm btn-default",staticStyle:{width:"81px"},attrs:{type:"button"},on:{click:t.loadData}},[s("i",{class:t.showLoading?"el-icon-loading":"ion-refresh"}),t._v(" "+t._s(t.loading_text))])]),t._v(" "),s("input",{directives:[{name:"model",rawName:"v-model",value:t.keyWord,expression:"keyWord"}],staticClass:"input-sm form-control",staticStyle:{height:"31px"},attrs:{type:"text",placeholder:t.$t("el.form.review_filter_placeholder")},domProps:{value:t.keyWord},on:{input:function(e){e.target.composing||(t.keyWord=e.target.value)}}}),t._v(" "),s("span",{staticClass:"input-group-btn"},[s("button",{staticClass:"btn btn-sm btn-default",attrs:{type:"button"}},[t._v(t._s(t.$t("el.page.search")))])])])])]),t._v(" "),s("hr",{staticStyle:{"margin-bottom":"0","margin-top":"10px"}}),t._v(" "),s("div",{staticClass:"project-list"},[s("table",{staticClass:"table table-hover",attrs:{id:"apply-manage"}},[s("tbody",[t.applicats.length>0?[t.isPhone?t._l(t.applicatlist,function(e,i){return s("tr",{staticClass:"row",staticStyle:{"border-bottom":"1px solid #aac0da"}},[s("div",{staticClass:"panel panel-default"},[s("div",{staticClass:"panel-heading"},[s("h5",{staticClass:"panel-title"},[s("Status",{attrs:{statusClass:!1,status:e.status}}),t._v(" "),s("router-link",{staticStyle:{"line-height":"16px","font-size":"12px"},attrs:{to:t.$route.path+"/details/"+e.id}},[t._v("\n                                  "+t._s(e.mechanism)+" - "+t._s(e.type)+"\n                                ")])],1)]),t._v(" "),s("div",{staticClass:"panel-body",staticStyle:{"text-align":"center"}},["审核通过"!=e.status&&"已结束"!=e.status?s("el-steps",{attrs:{center:"",space:110,active:e.stage,"finish-status":"success"}},t._l(e.roles.data,function(t,a){return s("el-step",{key:a,attrs:{title:t.display_name,status:"审核不通过"==e.status&&a==e.stage-1?"error":""}})})):["已结束"==e.status?s("el-rate",{attrs:{"disabled-void-color":"#b0b1b3",disabled:""},model:{value:e.appraisal.data.score,callback:function(a){t.$set(e.appraisal.data,"score",a)},expression:"applicat.appraisal.data.score"}}):s("img",{attrs:{src:a("wHuf"),width:"90%"}})]],2),t._v(" "),s("div",{staticClass:"panel-footer"},[s("router-link",{staticStyle:{"margin-right":"10px"},attrs:{to:t.$route.path+"/details/"+e.id}},[s("el-button",{attrs:{type:"text",size:"small"}},[t._v(t._s(t.$t("el.form.look")))])],1),t._v(" "),"待审核"==e.status||"审核中"==e.status?s("el-popover",{attrs:{placement:"top",trigger:"click",width:"160"}},[s("p",[t._v("确定放弃这条申请吗？")]),t._v(" "),s("div",{staticStyle:{"text-align":"right",margin:"0"}},[s("el-button",{attrs:{type:"primary",size:"mini"},on:{click:function(a){t.cancelApplicat(e)}}},[t._v(t._s(t.$t("el.messagebox.confirm")))])],1),t._v(" "),s("el-button",{staticStyle:{float:"right"},attrs:{slot:"reference",type:"text",size:"small"},slot:"reference"},[t._v(t._s(t.$t("el.form.cancel")))])],1):s("el-popover",{attrs:{placement:"top",trigger:"click",width:"160"}},[s("p",[t._v("确定删除这条申请吗？")]),t._v(" "),s("div",{staticStyle:{"text-align":"right",margin:"0"}},[s("el-button",{attrs:{type:"primary",size:"mini"},on:{click:function(a){t.removeApplicat(e,i)}}},[t._v(t._s(t.$t("el.messagebox.confirm")))])],1),t._v(" "),s("el-button",{staticStyle:{float:"right"},attrs:{slot:"reference",type:"text",size:"small"},slot:"reference"},[t._v(t._s(t.$t("el.form.delete")))])],1)],1)])])}):t._l(t.applicatlist,function(e,i){return s("tr",[s("td",[s("Status",{attrs:{status:e.status}})],1),t._v(" "),s("td",{staticClass:"project-title col-md-4"},[s("router-link",{attrs:{to:t.$route.path+"/details/"+e.id}},[t._v("\n                                    "+t._s(e.mechanism)+" - "+t._s(e.type)+"\n                                  ")]),t._v(" "),s("br"),t._v(" "),s("small",[t._v(t._s(t.$t("el.table.created_at")+" "+e.created_at))])],1),t._v(" "),"审核通过"!=e.status&&"已结束"!=e.status?s("td",{staticClass:"project-roles col-md-5"},[s("el-steps",{attrs:{space:150,active:e.stage,direction:t.isPhone?"vertical":"horizontal","finish-status":"success"}},t._l(e.roles.data,function(t,a){return s("el-step",{key:a,attrs:{description:t.display_name,status:"审核不通过"==e.status&&a==e.stage-1?"error":""}})}))],1):["已结束"==e.status?s("td",[s("el-rate",{attrs:{"disabled-void-color":"#b0b1b3",disabled:""},model:{value:e.appraisal.data.score,callback:function(a){t.$set(e.appraisal.data,"score",a)},expression:"applicat.appraisal.data.score"}})],1):s("td",[s("img",{attrs:{src:a("wHuf"),width:"350",height:"48",alt:""}})])],t._v(" "),s("td",{staticClass:"project-actions col-md-2"},[s("router-link",{staticStyle:{"margin-right":"10px"},attrs:{to:t.$route.path+"/details/"+e.id}},[s("el-button",{attrs:{type:"text",size:"small"}},[t._v(t._s(t.$t("el.form.look")))])],1),t._v(" "),s("el-popover",{directives:[{name:"show",rawName:"v-show",value:"待审核"==e.status||"审核中"==e.status,expression:"applicat.status == '待审核' || applicat.status == '审核中'"}],attrs:{placement:"top",trigger:"click",width:"160",value:t.show}},[s("p",[t._v("确定放弃这条申请吗？")]),t._v(" "),s("div",{staticStyle:{"text-align":"right",margin:"0"}},[s("el-button",{attrs:{type:"primary",size:"mini"},on:{click:function(a){t.cancelApplicat(e)}}},[t._v(t._s(t.$t("el.messagebox.confirm")))])],1),t._v(" "),s("el-button",{staticStyle:{float:"right"},attrs:{slot:"reference",type:"text",size:"small"},slot:"reference"},[t._v(t._s(t.$t("el.form.cancel")))])],1),t._v(" "),s("el-popover",{directives:[{name:"show",rawName:"v-show",value:"待审核"!=e.status&&"审核中"!=e.status,expression:"applicat.status != '待审核' && applicat.status != '审核中'"}],attrs:{placement:"top",trigger:"click",width:"160",value:t.show}},[s("p",[t._v("确定删除这条申请吗？")]),t._v(" "),s("div",{staticStyle:{"text-align":"right",margin:"0"}},[s("el-button",{attrs:{type:"primary",size:"mini"},on:{click:function(a){t.removeApplicat(e,i)}}},[t._v(t._s(t.$t("el.messagebox.confirm")))])],1),t._v(" "),s("el-button",{staticStyle:{float:"right"},attrs:{slot:"reference",type:"text",size:"small"},slot:"reference"},[t._v(t._s(t.$t("el.form.delete")))])],1)],1)],2)})]:t._e()],2)]),t._v(" "),0==t.applicats.length?s("h3",{staticClass:"none text-center"},[t._v(t._s(t.$t("el.page.nothing")))]):t._e()]),t._v(" "),s("div",{staticClass:"row"},[s("nav",{staticClass:"text-center"},[t.applicats.length<1?s("div"):[t.isPhone?s("el-pagination",{attrs:{small:!0,"current-page":t.currentPage,layout:"prev, pager, next",total:t.total},on:{"current-change":t.handleCurrentChange}}):s("el-pagination",{attrs:{"current-page":t.currentPage,"page-sizes":[10,20,50,100],"page-size":t.pageSize,layout:"total, sizes, prev, pager, next, jumper",total:t.total},on:{"size-change":t.handleSizeChange,"current-change":t.handleCurrentChange}})]],2)])])])])},staticRenderFns:[]}},WWaS:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement;return(t._self._c||e)("span",{staticClass:"label label-primary",class:[{"label-warning":"待审核"==t.status},{"label-info":"审核中"==t.status},{"label-success":"审核通过"==t.status},{"label-danger":"审核不通过"==t.status},{status:t.statusClass}]},[t._v(t._s(t.status))])},staticRenderFns:[]}},Yy0C:function(t,e,a){var s=a("VU/8")(a("8hum"),a("SHrH"),!1,function(t){a("jPAB")},"data-v-dc25d576",null);t.exports=s.exports},b3bp:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={props:{status:{type:String,default:"待审核"},statusClass:{type:Boolean,default:!0}}}},jPAB:function(t,e,a){var s=a("opWV");"string"==typeof s&&(s=[[t.i,s,""]]),s.locals&&(t.exports=s.locals);a("rjj0")("e8fa2774",s,!0,{})},opWV:function(t,e,a){(t.exports=a("FZ+f")(!1)).push([t.i,".none[data-v-dc25d576]{color:#ecf0f1;padding-bottom:20px}.progress-mini .progress-bar[data-v-dc25d576],.progress-mini[data-v-dc25d576]{height:5px;margin-bottom:0}.progress-mini[data-v-dc25d576],.progress-small[data-v-dc25d576]{margin-top:5px}.progress-bar[data-v-dc25d576]{background-color:#23b7e5}.project-list table tr td[data-v-dc25d576]{border-top:none;border-bottom:1px solid #e7eaec;padding:15px 10px;vertical-align:middle}.project-title a[data-v-dc25d576]{font-size:14px;color:#676a6c;font-weight:600}.btn-white[data-v-dc25d576]{color:inherit;background:#fff;border:1px solid #e7eaec}.project-actions[data-v-dc25d576]{text-align:right}.el-step__description[data-v-dc25d576]{margin-top:5px}#apply-manage .row .title[data-v-dc25d576]{width:100%;line-height:30px;margin-bottom:5px;background:#ebf2f7}.no-padding[data-v-dc25d576]{padding-left:0;padding-right:0}.panel-title[data-v-dc25d576]{font-size:1em}#apply-manage td[data-v-dc25d576]:nth-child(3){text-align:center}",""])},qLXb:function(t,e,a){var s=a("VU/8")(a("b3bp"),a("WWaS"),!1,function(t){a("8njy")},null,null);t.exports=s.exports},wHuf:function(t,e){t.exports="/images/pass.png?86809b27e8e42503035e5da7cc288521"}});