"use strict";(self.__LOADABLE_LOADED_CHUNKS__=self.__LOADABLE_LOADED_CHUNKS__||[]).push([[21563],{279812:(e,t,o)=>{o.d(t,{Z:()=>l});var a=o(616550),n=o(196074),i=o(410150);function l(){let e=(0,a.k6)(),t=(0,i.HG)();return o=>{t?(0,n.Z)(o,{disableOriginCheck:!0}):e.push(o)}}},644845:(e,t,o)=>{o.d(t,{Z:()=>a});let a=(e,t)=>{let o=new Date;return new Date(1e3*e)<=new Date(o.getFullYear()-(t||18),o.getMonth(),o.getDate())}},887103:(e,t,o)=>{o.d(t,{Di:()=>l,Jl:()=>a,R:()=>n,aU:()=>s,j2:()=>i,pN:()=>r});let a=1e4,n="permanent_account_closure",i="account_deletion_email_sent",l="account_deactivated",s="unlink_successful",r="account_switch_to_settings"},323437:(e,t,o)=>{o.d(t,{Z:()=>n});var a=o(785893);function n({size:e}){return(0,a.jsx)("svg",{height:e,viewBox:"0 0 512 512",width:e,xmlns:"http://www.w3.org/2000/svg",children:(0,a.jsxs)("g",{fill:"none",fillRule:"evenodd",children:[(0,a.jsx)("path",{d:"M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z",fill:"#4285f4"}),(0,a.jsx)("path",{d:"M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z",fill:"#34a853"}),(0,a.jsx)("path",{d:"M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z",fill:"#fbbc05"}),(0,a.jsx)("path",{d:"M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z",fill:"#ea4335"}),(0,a.jsx)("path",{d:"M20 20h472v472H20V20z"})]})})}},894789:(e,t,o)=>{o.d(t,{Z:()=>n});let a=e=>(e||"").replace(/-/g,"+").replace(/_/g,"/"),n=e=>JSON.parse(decodeURIComponent(atob(a(e.split(".")[1])).split("").map(e=>"%"+("00"+e.charCodeAt(0).toString(16)).slice(-2)).join("")))},728891:(e,t,o)=>{o.d(t,{Z:()=>i});var a=o(375182),n=o(1006);async function i(e){let t=await (0,a.Kw)(),o=t?{user_ids:Object.keys(t)}:{};(0,n.tj)(`mweb_multiple_accounts_${e}`,o)}},715153:(e,t,o)=>{o.d(t,{eN:()=>_,_:()=>p,kB:()=>u});var a=o(635258),n=o(868808),i=o(723184),l=o(616550);let s=["/resource/:name/:method/","/resource/commerce/:name/:method/","/:username/pins/follow/","/email/remove/","/about/trademark/:claim_type/","/about/copyright/dmca-pin/web-result/:id/","/about/copyright/dmca-pin/pin/:id/","/about/copyright/dmca-pin/","/about/koplg/","/about/:lawName/","/about/radtc/","/website/confirm/","/oauth/","/app-factory-oauth/","/settings/extension/uninstall/","/offsite/","/amp/(.*)"],r=(e,t)=>{let o=new URL(e,t);return s.some(e=>!!(0,l.LX)(o.pathname,{path:e,exact:!0}))};var c=o(415787);let _=e=>e&&(0,n.Qg)(e)&&a.lfe!==e?(0,n.Qc)(e).relative:"/",u=(e,t)=>{let o=(0,n.Jx)(e);return r(o,t)||(0,i.Z)(o)===n.vx.TRUSTED_DIFFERENT_ORIGIN},p=({forceFullPageNavigation:e,history:t,next:o,noLocationReplace:a,origin:i})=>{let l=(0,n.Jx)(o);u(o,i)||!t||e?(e&&(0,c.nP)("webapp.duplo.navigateOnLogin.forceFullPageNavigation",{sampleRate:1}),window.location.assign(l)):a?t.push(_(l)):t.replace(_(l))}},171707:(e,t,o)=>{o.d(t,{Z:()=>x});var a=o(667294),n=o(883119),i=o(894789),l=o(391731),s=o(260134),r=o(297728),c=o(730212),_=o(1006),u=o(154785),p=o(144326),d=o(297726),g=o(323437),h=o(244734),m=o(785893);function b(){let e=(0,p.ZP)(),[t,o]=(0,a.useState)();return(0,d.q)()?null:(0,m.jsxs)(n.xu,{position:"relative",children:[(0,m.jsx)(n.iP,{onTap:()=>o(!0),children:(0,m.jsxs)(n.xu,{alignItems:"center",color:"secondary",display:"flex",height:40,justifyContent:"center",position:"relative",rounding:"pill",children:[(0,m.jsx)(n.xu,{height:24,marginTop:1,width:24,children:(0,m.jsx)(g.Z,{size:20})}),(0,m.jsx)(n.xu,{marginStart:2,children:(0,m.jsx)(n.xv,{weight:"bold",children:e._('Connect with Google', 'googleConnectButtonWithDisabledSDK.buttonText', 'Connect with Google button text')})})]})}),t&&(0,m.jsx)(h.Z,{onDismiss:()=>o(!1),type:"google"})]})}function w({onGoogleConnectSuccess:e,onTouch:t}){let{locale:o}=(0,c.B)(),r=(0,a.useRef)(null),p=(0,s.M)(),d=(0,a.useRef)(e),g=(0,u.Z)();return(0,a.useEffect)(()=>{d.current=e},[e]),(0,a.useEffect)(()=>{let e=({credential:e,select_by:t})=>{(0,_.My)(`unauth_mweb.gsi_button.select_by.${t}`),(0,_.NC)("press_google_connect_button");let o=(0,i.Z)(e);d.current({google_open_id_token:e,autologin:!1},{type:"google",google_open_id_token:e,first_name:o.given_name,last_name:o.family_name,image_url:o.picture})};return(async()=>{await p?.ensureInit("button",e),(0,l.ru)({buttonRef:r,isDesktop:!1,locale:o,onTouch:t})})(),()=>{p?.removeButtonCallback(e)}},[p,o]),(0,m.jsx)(n.xu,{position:"relative",children:(0,m.jsx)(n.iP,{onTap:()=>{g({action:"click",item:"google-connect-button"}),(0,_.EX)({event:"start",provider:"google"})},children:(0,m.jsx)(n.xu,{"aria-label":"GOOGLE_SIGNIN_BUTTON",height:44,children:(0,m.jsx)(n.xu,{ref:r,width:"100%"})})})})}function x({onGoogleConnectSuccess:e,onTouch:t}){let{checkExperiment:o}=(0,r.F)(),{anyEnabled:a}=o("mweb_google_disabled");return a?(0,m.jsx)(b,{}):(0,m.jsx)(w,{onGoogleConnectSuccess:e,onTouch:t})}},844745:(e,t,o)=>{o.d(t,{Z:()=>n});var a=o(116897);let n=e=>new Set([...a.EU,...a.rT,...a.IO]).has(e)},72766:(e,t,o)=>{o.d(t,{f:()=>S,l:()=>I});var a=o(667294),n=o(545007),i=o(191855),l=o(252071),s=o(609326),r=o(488792),c=o(914896),_=o(418256),u=o(744920),p=o(591692),d=o(887103),g=o(76367),h=o(297728),m=o(484777),b=o(103741),w=o(730212),x=o(235581),v=o(864723),f=o(786525),E=o(1006),k=o(711120),y=o(356801),C=o(116897),A=o(728891),Z=o(715153),j=o(227984),D=o(814779),P=o(592305),T=o(415787);let R=e=>({type:"AUTHENTICATE_USER",payload:{user:e}}),S=()=>{let e=(0,r.Z)(),t=(0,h.F)(),o=(0,n.I0)(),{country:S,countryFromHostName:I,countryFromIp:O,regionFromIp:z,userAgent:{isTablet:L,isMobile:M}}=(0,w.B)(),N=(0,m.Z)(),F=(0,k.Z)();return(0,a.useCallback)(async(a,n,r="/",h={isAutologin:!1,isSwitchAccount:!1,noLocationReplace:!1,recaptchaV3Token:"default",noImmediateRedirect:!1,useAlternativeResourceCall:!1,trigger:"other",accountUnlinked:!1},m)=>{N();let w=!L&&!M,{isAutologin:k,isSwitchAccount:U,noLocationReplace:H,recaptchaV3Token:G,noImmediateRedirect:B,useAlternativeResourceCall:K,trigger:X,accountUnlinked:Y}=h;(0,v.M0)().setItem(s.V6,(0,g.nY)(a));let V=t=>{e({...m,event_type:t,aux_data:{...m.aux_data,upsell_reason:m.aux_data?.upsell_reason||(k?"autologin":(0,v.M0)().getItem(s.bg)),upsell_view_count:(0,v.M0)().getItem(s.w0)??0}}),7536===t&&(0,v.M0)().setItem(s.w0,0)},J={get_user:!0,...a,app_type_from_client:6,recaptchaV3Token:G},$=(0,P.t_)();$&&(J={...J,visited_pages_before_login:$});let q=(0,j.O)();q&&(J={...J,referrer:q});let W=l.Z.create("UserSessionResource",J).callCreate();if(K&&a.username_or_email&&a.password){let e=new FormData;e.append("username",a.username_or_email),e.append("password",a.password),W=fetch("/resource/UserSessionResource/create/",{method:"POST",body:e,credentials:"include",headers:{Accept:"application/json, text/javascript, */*","X-CSRFToken":(0,_._V)()||"","X-Requested-With":"XMLHttpRequest"}}).then(e=>{if(200!==e.status)throw Error(e.statusText);return e.json()}).catch(e=>Promise.reject(e))}try{k?(0,E.dy)({event:"login_api_call_start",provider:a.google_open_id_token?"google":"facebook"}):(0,E.EX)({event:"login_api_call_start",provider:(0,g.nY)(a)}),V(7534),F({action:k?"autologin":"login",event:"attempt",type:(0,g.lp)(a),trigger:X});let e=await W;k?(0,E.dy)({event:"login_api_call_success",provider:a.google_open_id_token?"google":"facebook"}):(0,E.EX)({event:"login_api_call_success",provider:(0,g.nY)(a)}),o(R(e.resource_response.data.user));let l=e.client_context,s=e.resource_response.data.user.gatekeeper_experiments;if(s){let{active:e,triggerable:o}=s;e&&o||(0,T.nP)("webapp.authentication.emptyExperimentsDebug",{sampleRate:1,tags:{active:String(!!e),triggerable:String(!!o)}}),t.updateExperiments(e,o)}else(0,T.nP)("webapp.authentication.updateExperimentsFailed");l&&l.placed_experiences&&o((0,u.OD)(l.placed_experiences)),(0,A.Z)("authentication.login_success"),g.ZP.storeLoginCredentialsToBrowser(a),V(7536),F({action:k?"autologin":"login",event:"success",type:(0,g.lp)(a),trigger:X}),(0,p.Z)(),c.zN(i.e7.name),c.zN(i.x3.name),(0,f.Nh)(C.AA,1),"/"!==r&&(0,D.E)(!0),U?(0,x.Z)().then(()=>{let t=`/${e.resource_response.data?.user.username||""}`+(Y?`?message=${d.aU}`:"");window.location.href=t}):k&&!w||B||(!a.google_open_id_token&&w&&t.checkExperiment("dweb_arr_modal_post_fb_login").anyEnabled&&(0,y.I9)(),(0,Z._)({forceFullPageNavigation:w,history:n,next:r,noLocationReplace:H,origin:window.location.toString()})),"facebook"===(0,g.nY)(a)&&!w&&t.checkExperiment("mweb_arr_modal_post_fb_login").anyEnabled&&(0,y.I9)(),(0,b.ko)({country:S,countryFromHostName:I,countryFromIp:O,regionFromIp:z,deviceType:"Mobile",eventCategory:"Logins"})}catch(e){if(k?(0,E.dy)({event:"login_api_call_failure",provider:a.google_open_id_token?"google":"facebook"}):(0,E.EX)({event:"login_api_call_failure",provider:(0,g.nY)(a)}),1201!==e.api_error_code||k||w)throw V(7535),F({action:k?"autologin":"login",event:"fail",type:(0,g.lp)(a),trigger:X}),U&&(0,A.Z)("authentication.login_error"),e;if(n){let t={creds:a,next:r,phoneNumber:e?.data?.phone_number_end};n.push({pathname:"/login/mfa/",state:t})}}},[o,S,I,O,N,t,M,L,e,z,F])},I=()=>{let e=(0,h.F)(),t=(0,n.I0)(),o=(0,m.Z)();return({client_context:a,resource_response:n})=>{let{data:i}=n;i&&(o(),t(R(i.user)));let l=i.user.gatekeeper_experiments;if(l){let{active:t,triggerable:o}=l;t&&o||(0,T.nP)("webapp.crossDomainAutologin.emptyExperimentsDebug",{sampleRate:1,tags:{active:String(!!t),triggerable:String(!!o)}}),e.updateExperiments(t,o)}else(0,T.nP)("webapp.crossDomainAutologin.updateExperimentsFailed");a&&t((0,u.OD)(a.placed_experiences))}}},834945:(e,t,o)=>{o.d(t,{m:()=>T});var a=o(545007),n=o(191855),i=o(252071),l=o(609326),s=o(259232),r=o(488792),c=o(914896),_=o(194093),u=o(744920),p=o(591692),d=o(677657),g=o(267005),h=o(844543),m=o(297728),b=o(484777),w=o(103741),x=o(730212),v=o(235581),f=o(864723),E=o(978993),k=o(1006),y=o(711120),C=o(728891),A=o(227984),Z=o(844745),j=o(592305),D=o(415787);let P=e=>({type:"REGISTER_USER",payload:{user:e}}),T=()=>{let e=(0,m.F)(),t=(0,a.I0)(),{country:o,countryFromHostName:T,countryFromIp:R,regionFromIp:S,isAuthenticated:I}=(0,x.B)(),O=(0,b.Z)(),z=(0,r.Z)(),L=(0,y.Z)();return(a,{signupAttemptContextEvent:r})=>{let m=(0,h.yV)(a),b=(0,f.M0)(),x=e=>{z({...r,event_type:e,aux_data:{...r.aux_data,upsell_reason:r.aux_data?.upsell_reason||b.getItem(l.bg)||null,upsell_view_count:b.getItem(l.w0)||0}}),7487===e&&b.setItem(l.w0,0)};x(7537),L({action:"signup",event:"attempt",type:m}),O();let y=0,M=(0,Z.Z)(o),N=new Promise(e=>{M?setTimeout(()=>{e(void 0)},3e3):e(void 0)});return new Promise((r,b)=>{let Z=()=>{let O=(0,j.t_)(),z=(0,A.O)(),M={...a,user_behavior_data:function(){let e=(0,f.M0)().getItem(l.E9);return JSON.stringify(e?{LOCALSTORAGE_UNAUTH_TOPICS_FOLLOWED:e}:{})}(),visited_pages:O},F=(0,d.Z)({checkExperiment:e.checkExperiment});F.length>0&&(M={...M,privacy_disclaimer_acknowledge:F}),z&&(M={...M,referrer:z}),(0,D.nP)("webapp.debug_signup_type.redux_registration",{sampleRate:1,tags:{CHECK_TYPE:(0,h.Eh)(M,"CHECK_TYPE")??"none",CHECK_EXISTS:(0,h.Eh)(M,"DEPRECATED_CHECK_EXISTS"),CHECK_TRUTHY:(0,h.Eh)(M,"DEPRECATED_CHECK_TRUTHY")}}),i.Z.create("UserRegisterResource",{...M,get_user:!0}).callCreate().then(n=>N.then(()=>{(0,E.L_)("d_pif_invite");let i=n.client_context;t(P(n.resource_response.data.user));let l=n.resource_response.data.user.gatekeeper_experiments;if(l){let{active:t,triggerable:o}=l;t&&o||(0,D.nP)("webapp.registration.emptyExperimentsDebug",{sampleRate:1,tags:{active:String(!!t),triggerable:String(!!o)}}),e.updateExperiments(t,o)}else(0,D.nP)("webapp.registration.updateExperimentsFailed");i&&i.placed_experiences&&t((0,u.OD)(i.placed_experiences)),I&&(0,C.Z)("registration.signup_success");let{email:c,username:_,password:d}=a,g=c||_||null,h=d||null,{credentials:b}=navigator;if(b&&g&&h)try{let e=new window.PasswordCredential({id:g,password:h});(0,k.My)("unauth_mweb.navigatorCredentials.store.attempt"),b.store(e).then(()=>{(0,k.My)("unauth_mweb.navigatorCredentials.store.success")})}catch(e){(0,k.My)("unauth_mweb.navigatorCredentials.store.error")}x(7487),L({action:"signup",event:"success",type:m}),(0,s.Z)(),(0,p.Z)(!0),I&&(0,v.Z)(),(0,w.ko)({country:o,countryFromHostName:T,countryFromIp:R,regionFromIp:S,deviceType:"Mobile",eventCategory:"NewUsers"}),r()})).catch(e=>{let t=(0,_.Z)(e,"api_error_code");t===g.tz&&((0,k.My)("multi_step_set_age_restrict_cookie"),c.t8(n.It,"1",(0,c.kZ)(n.It))),y<3&&[g.dO,g.cZ].includes(t??0)?(y+=1,Z()):(x(7488),L({action:"signup",event:"fail",type:m}),I&&(0,C.Z)("registration.signup_error"),b(e))})};Z()})}}},244734:(e,t,o)=>{o.d(t,{Z:()=>s});var a=o(883119),n=o(758339),i=o(144326),l=o(785893);function s({type:e,onDismiss:t}){let o=(0,i.ZP)(),s="facebook"===e?o._('Oops! Facebook isn\'t available', 'socialAuthDisabled.facebook.title', 'Title for the modal shown when Facebook services are not working'):o._('Oops! Google isn\'t available', 'socialAuthDisabled.google.title', 'Title for the modal shown when Google services are not working'),r="facebook"===e?o._('Looks like Facebook isn\'t available right now.\n\nGive another option a try or refresh the page and try again later.', 'socialAuthDisabled.facebook.description', 'Description for the modal shown when Facebook services are not working'):o._('Looks like Google isn\'t available right now.\n\nGive another option a try or refresh the page and try again later.', 'socialAuthDisabled.google.description', 'Description for the modal shown when Google services are not working');return(0,l.jsx)(n.ZP,{accessibilityModalLabel:"",isOpen:!0,mobileHideCloseIcon:!0,onDismiss:t,type:"social_auth_disabled_modal",children:(0,l.jsxs)(a.xu,{padding:5,children:[(0,l.jsx)(a.xu,{marginBottom:3,children:(0,l.jsx)(a.X6,{accessibilityLevel:1,size:"500",children:s})}),(0,l.jsx)(a.xu,{marginBottom:3,children:(0,l.jsx)(a.xv,{children:r})}),(0,l.jsx)(a.kC,{alignItems:"stretch",direction:"column",justifyContent:"start",children:(0,l.jsx)(a.xu,{paddingY:1,children:(0,l.jsx)(a.zx,{accessibilityLabel:o._('OK', 'socialAuthDisabled.okButton', 'Button that closes modal shown when Facebook or Google services are not working'),color:"red",onClick:t,size:"lg",text:o._('OK', 'socialAuthDisabled.okButton', 'Button that closes modal shown when Facebook or Google services are not working')})})})]})})}}}]);
//# sourceMappingURL=https://sm.pinimg.com/webapp/21563-551fd6bc9648f72a.mjs.map