webpackJsonp([23],{HDWv:function(e,t,i){var s=i("UyAM");"string"==typeof s&&(s=[[e.i,s,""]]),s.locals&&(e.exports=s.locals);i("rjj0")("dfff5034",s,!0,{})},UyAM:function(e,t,i){(e.exports=i("FZ+f")(!1)).push([e.i,"@media (max-width:768px){.dialog{width:70%}}#role-edit .el-checkbox-group label:first-child{margin-left:15px}",""])},YkUj:function(e,t,i){var s=i("VU/8")(i("ggDu"),i("iWJP"),!1,function(e){i("HDWv")},null,null);e.exports=s.exports},ggDu:function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var s,o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},r=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var i=arguments[t];for(var s in i)Object.prototype.hasOwnProperty.call(i,s)&&(e[s]=i[s])}return e},n=i("2WXv"),a=(s=n)&&s.__esModule?s:{default:s},l=i("NYxO");t.default={data:function(){return{role:{},menus:[],permissions:"",menusId:[],permsId:[],oldCheckList:{},treeVisible:!1,defaultProps:{children:"items",label:"title"},checkAll:!0,cities:[],isIndeterminate:!0}},created:function(){var e=this;axios.all([this.getRole(),this.getMenus(),this.getPermission()]).then(axios.spread(function(t,i,s){e.role=t.data.data,e.setMenusId(),e.setPermsId(),e.menus=i.data.data,e.permissions=s.data.data}))},components:{Modal:a.default},computed:r({tree:function(){var e=[],t=this.deepCopy(this.menus);for(var i in t)e[t[i].id]=t[i],e[t[i].id].title=this.$t("el.sidebar."+e[t[i].id].title),e[t[i].id].items=[],"object"!=o(t[i].parent_id)&&e[t[i].parent_id].items.push(t[i]);e.forEach(function(e,t,i){"object"!=o(e.parent_id)&&delete i[t]});var s=[];for(var r in e)s.push(e[r]);return s}},(0,l.mapState)(["isPhone"])),methods:{getRole:function(){return axios.get("/api/role/"+this.$route.params.id+"/edit?include=menus,permissions")},getMenus:function(){return axios.get("/api/menus")},getPermission:function(){return axios.get("/api/permission?pageSize=all")},edit:function(){var e=this;this.updateRoleMenuValue(),this.role.permissions=this.permsId,axios.put("/api/role/"+this.$route.params.id,this.role).then(function(t){toastr.success(e.$t("el.notification.update_role")),e.$router.push("/roles")})},setMenusId:function(){var e=this;this.role.menus.data.forEach(function(t,i,s){""!=t.uri&&e.menusId.push(t.id)})},setPermsId:function(){var e=this;this.role.permissions.data.forEach(function(t,i,s){e.permsId.push(t.id)})},handleCheckAllChange:function(e){for(var t=[],i=0;i<this.permissions.length;i++)t.push(this.permissions[i].id);this.permsId=e.target.checked?t:[],this.isIndeterminate=!1},handleCheckedCitiesChange:function(e){var t=e.length;this.checkAll=t===this.permissions.length,this.isIndeterminate=t>0&&t<this.cities.length},updateRoleMenuValue:function(){if(void 0===this.$refs.tree)this.role.menus=null;else{for(var e=[],t=this.$refs.tree.getCheckedNodes(),i=0;i<t.length;i++)e.push(t[i].id),null!=t[i].parent_id&&e.push(t[i].parent_id);var s={};for(i=0;i<e.length;i++)void 0===s[e[i]]&&(s[e[i]]=1);for(var o in e.splice(0,e.length),s)e.push(o);e.splice(-1,1),this.role.menus=e}},deepCopy:function(e){var t={};for(var i in e)t[i]="object"===o(e[i])?this.deepCopy(e[i]):e[i];return t},openTree:function(){this.oldCheckList=this.menus,this.treeVisible=!0},cancel:function(){this.menus=this.oldCheckList,this.treeVisible=!1},confirm:function(){this.treeVisible=!1}}}},iWJP:function(e,t){e.exports={render:function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("vue-form",{attrs:{title:e.$t("el.form.edit_role")}},[i("div",{attrs:{slot:"buttons"},slot:"buttons"},[i("router-link",{staticClass:"btn btn-default",attrs:{to:"/roles",exact:""}},[e._v(e._s(e.$t("el.form.back")))])],1),e._v(" "),i("div",{attrs:{slot:"content",id:"role-edit"},slot:"content"},[i("div",{staticClass:"row"},[i("form",{staticClass:"form col-md-4 col-md-offset-4",attrs:{role:"form"},on:{submit:function(t){return t.preventDefault(),e.edit(t)}}},[i("div",{staticClass:"form-group"},[i("label",{attrs:{for:"role"}},[e._v(e._s(e.$t("el.form.role")))]),e._v(" "),i("input",{directives:[{name:"model",rawName:"v-model",value:e.role.name,expression:"role.name"}],staticClass:"form-control",attrs:{type:"text",id:"role",placeholder:e.$t("el.form.role"),name:"name",disabled:""},domProps:{value:e.role.name},on:{input:function(t){t.target.composing||e.$set(e.role,"name",t.target.value)}}})]),e._v(" "),i("div",{staticClass:"form-group"},[i("label",{attrs:{for:"display_name"}},[e._v(e._s(e.$t("el.form.display_name")))]),e._v(" "),i("input",{directives:[{name:"model",rawName:"v-model",value:e.role.display_name,expression:"role.display_name"}],staticClass:"form-control",attrs:{type:"text",id:"display_name",placeholder:e.$t("el.form.display_name"),name:"display_name"},domProps:{value:e.role.display_name},on:{input:function(t){t.target.composing||e.$set(e.role,"display_name",t.target.value)}}})]),e._v(" "),i("div",{staticClass:"form-group"},[i("label",{attrs:{for:"description"}},[e._v(e._s(e.$t("el.form.description")))]),e._v(" "),i("textarea",{directives:[{name:"model",rawName:"v-model",value:e.role.description,expression:"role.description"}],staticClass:"form-control",attrs:{name:"description",id:"description",placeholder:e.$t("el.form.description")},domProps:{value:e.role.description},on:{input:function(t){t.target.composing||e.$set(e.role,"description",t.target.value)}}})]),e._v(" "),i("div",{staticClass:"form-group"},[i("label",{staticStyle:{display:"block"},attrs:{for:"permission"}},[e._v("权限")]),e._v(" "),i("el-checkbox",{attrs:{indeterminate:e.isIndeterminate},on:{change:e.handleCheckAllChange},model:{value:e.checkAll,callback:function(t){e.checkAll=t},expression:"checkAll"}},[e._v("全选")]),e._v(" "),i("div",{attrs:{id:"permission"}},[i("el-checkbox-group",{on:{change:e.handleCheckedCitiesChange},model:{value:e.permsId,callback:function(t){e.permsId=t},expression:"permsId"}},e._l(e.permissions,function(t){return i("el-checkbox",{key:t.id,attrs:{label:t.id}},[e._v(e._s(t.display_name))])}))],1)],1),e._v(" "),i("el-button",{attrs:{type:"text"},on:{click:e.openTree}},[e._v("设置可见菜单")]),e._v(" "),i("el-dialog",{attrs:{title:"可见菜单",size:e.isPhone?"full":"tiny"},model:{value:e.treeVisible,callback:function(t){e.treeVisible=t},expression:"treeVisible"}},[i("el-tree",{ref:"tree",attrs:{data:e.tree,"show-checkbox":"","node-key":"id","default-checked-keys":e.menusId,props:e.defaultProps}}),e._v(" "),i("div",{staticClass:"dialog-footer",attrs:{slot:"footer"},slot:"footer"},[i("el-button",{on:{click:e.cancel}},[e._v(e._s(e.$t("el.form.cancel")))]),e._v(" "),i("el-button",{attrs:{type:"primary"},on:{click:function(t){e.treeVisible=!1}}},[e._v(e._s(e.$t("el.form.ok")))])],1)],1),e._v(" "),i("div",{staticClass:"form-group"},[i("button",{staticClass:"btn btn-info",attrs:{type:"submit"}},[e._v(e._s(e.$t("el.form.edit")))])])],1)])])])},staticRenderFns:[]}}});