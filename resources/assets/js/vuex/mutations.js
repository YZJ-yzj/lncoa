import {
    TOGGLE,
    SET_ACCESS_TOKEN,
    LOGIN,
    OUT_LOGIN,
    SET_USER,
    UPDATE_AVATAR,
    SET_TYPES,
    SET_ROLES,
    SET_EQUIPMENT,
    JUDGE_PHONE,
    SET_NOTIFICAT,
    DELETE_NOTIFICAT,
    SET_MENUS,
    SET_PERMISSIONS,
} from './mutation-types'

export default {
    [TOGGLE] (state) {
      if(state.isPhone && state.sidebar.opened) {
          $(document.body).css('overflow-y','')
      }else{
          $(document.body).css('overflow-y','hidden')
      }
      return state.sidebar.opened = !state.sidebar.opened
    },
    [SET_ACCESS_TOKEN] (state, access_token) {
        state.access_token = access_token;
    },
    [LOGIN] (state) {
        state.isLogin = true;
    },
    //退出登陆
    [OUT_LOGIN] (state) {
        state.isLogin = false;
        state.user = null;
        state.access_token = '';
        localStorage.removeItem('access_token');
        sessionStorage.removeItem('access_token');
    },
    [SET_USER] (state, user) {
        state.user = user;
    },
    [UPDATE_AVATAR] (state, avatar) {
      state.user.avatar = avatar;
    },
    [SET_TYPES] (state, types) {
      state.types = types;
    },
    [SET_ROLES] (state, roles) {
      state.roles = roles;
    },
    [JUDGE_PHONE] (state) {
      let userAgentInfo = window.navigator.userAgent.toLowerCase();
      let agents = new Array("android", "iphone", "symbianos", "windows phone", "ipad", "ipod");
      var flag = false;
      for (var v = 0; v < agents.length; v++) {
          if (userAgentInfo.indexOf(agents[v]) != -1) {
              flag = true;
              break;
          }
      }
      state.isPhone = flag;
    },
    [SET_NOTIFICAT] (state, notificats) {
      state.notificats = notificats;
    },
    [DELETE_NOTIFICAT] (state, applicat_id) {
        let notificats = state.notificats;
        for(let i=0; i<notificats.length; i++) {
            if(notificats[i].data.applicat_id == applicat_id) {
                axios.delete('/api/notificat/' + notificats[i].id).then( response => {
                    notificats.splice(i,1);
                })
            }
        }
    },
    [SET_MENUS] (state, menus) {
        state.menus = menus;
    },
    [SET_PERMISSIONS] (state, permissions) {
        state.permissions = permissions;
    }
}
