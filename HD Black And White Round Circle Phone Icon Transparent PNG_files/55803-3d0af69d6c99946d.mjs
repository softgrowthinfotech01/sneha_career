"use strict";(self.__LOADABLE_LOADED_CHUNKS__=self.__LOADABLE_LOADED_CHUNKS__||[]).push([[55803],{705492:(e,t,o)=>{o.d(t,{Z:()=>n});let n=e=>Math.floor(new Date(e).getTime()/1e3)},349969:(e,t,o)=>{o.d(t,{Z:()=>i});var n=o(785893);let i=(0,n.jsx)("svg",{height:"40px",version:"1.1",viewBox:"0 0 40 40",width:"40px",xmlns:"http://www.w3.org/2000/svg",children:(0,n.jsx)("g",{fill:"none",fillRule:"evenodd",stroke:"none",strokeWidth:"1",children:(0,n.jsx)("path",{d:"M28.2226562,20.3846154 C29.0546875,20.3846154 30.0976562,19.8048315 30.71875,19.0317864 C31.28125,18.3312142 31.6914062,17.352829 31.6914062,16.3744437 C31.6914062,16.2415766 31.6796875,16.1087095 31.65625,16 C30.7304687,16.0362365 29.6171875,16.640178 28.9492187,17.4494596 C28.421875,18.06548 27.9414062,19.0317864 27.9414062,20.0222505 C27.9414062,20.1671964 27.9648438,20.3121424 27.9765625,20.3604577 C28.0351562,20.3725366 28.1289062,20.3846154 28.2226562,20.3846154 Z M25.2929688,35 C26.4296875,35 26.9335938,34.214876 28.3515625,34.214876 C29.7929688,34.214876 30.109375,34.9758423 31.375,34.9758423 C32.6171875,34.9758423 33.4492188,33.792117 34.234375,32.6325493 C35.1132812,31.3038779 35.4765625,29.9993643 35.5,29.9389701 C35.4179688,29.9148125 33.0390625,28.9122695 33.0390625,26.0979021 C33.0390625,23.6579784 34.9140625,22.5588048 35.0195312,22.474253 C33.7773438,20.6382708 31.890625,20.5899555 31.375,20.5899555 C29.9804688,20.5899555 28.84375,21.4596313 28.1289062,21.4596313 C27.3554688,21.4596313 26.3359375,20.6382708 25.1289062,20.6382708 C22.8320312,20.6382708 20.5,22.5950413 20.5,26.2911634 C20.5,28.5861411 21.3671875,31.013986 22.4335938,32.5842339 C23.3476562,33.9129053 24.1445312,35 25.2929688,35 Z",fill:"#FFFFFF",fillRule:"nonzero",id:""})})})},765963:(e,t,o)=>{o.d(t,{Z:()=>n});let n={EMAIL:1,FACEBOOK:2,GPLUS:3,GOOGLE_ONE_TAP:4,SMARTLOCK:5,MULTIFACTOR:6,SWITCH_ACCOUNT:7,LINE:8,SSO:9}},863266:(e,t,o)=>{o.d(t,{Z:()=>h});var n=o(191855),i=o(609326),a=o(914896),s=o(786525),l=o(635258),r=o(868808),c=o(937304);let d="undefined"!=typeof window,_=d?`${window.location.origin}/oauth/line/redirect`:"",u=({origin:e,data:t})=>t&&e===window.location.origin?String(t):null,p=({url:e,key:t})=>{if(!e.startsWith(window.location.origin)||t!==i.MM)return null;let o=(0,s.qn)(i.MM);return(0,s.L_)(i.MM),o};function h(e,t){let o;if(!d){t.error?.({message:"Window is undefined"});return}let i=function(e=5){let t="abcdefghijklmnopqrstuvwxyz1234567890";return Array(e).fill("").map(()=>t[Math.floor(Math.random()*t.length)]).join("")}(10),s=async e=>{if(!e.isTrusted)return;let l=e instanceof MessageEvent?u(e):p(e),d=(0,r.mB)(l);if(d.state&&d.code&&d.state===i){t.fetching?.(),o&&!o.closed&&o.close();try{let e=await fetch("/oauth/line/verify",{headers:{"Content-type":"application/x-www-form-urlencoded; charset=UTF-8","x-csrftoken":`${String(a.U2(n.fS))}`},method:"POST",body:(0,c.Z)({code:d.code,redirect_uri:_})}),{id_token:o,access_token:i}=await e.json();o&&i?t.success({line_id_token:o,line_access_token:i}):t.error?.({message:"No tokens returned"})}catch(e){t.error?.(e)}finally{o&&!o.closed&&o.close(),window.removeEventListener("message",s),window.removeEventListener("storage",s),t.complete?.()}}};window.addEventListener("message",s),window.addEventListener("storage",s),o=window.open(`https://access.line.me/oauth2/v2.1/authorize?response_type=code&client_id=${l.zal}&redirect_uri=${encodeURIComponent(_)}&state=${i}&ui_locales=${e}&scope=profile%20openid%20email`,"_blank")}},369081:(e,t,o)=>{o.d(t,{GH:()=>r,JF:()=>f,Jb:()=>p,MI:()=>g,_V:()=>c,fi:()=>b,sl:()=>_,we:()=>u});var n=o(705492),i=o(400416),a=o(680369),s=o(685667),l=o(1006);let r="274266067164",c=()=>["public_profile","email","user_friends"],d=["picture.type(large)","id","first_name","last_name","email","gender"],_=e=>{e&&(0,l.dy)({event:"load_script_success",provider:"facebook"}),"undefined"!=typeof window&&window.FB?(e&&(0,l.dy)({event:"initialize_library",provider:"facebook"}),window.FB.init({appId:r,status:!0,xfbml:!0,version:"v2.7"})):e?(0,l.dy)({event:"global_object_not_found",provider:"facebook"}):(0,l.My)("pcons.non_autologin.fb.global_object_not_found")},u=(e,t)=>(t&&(0,l.dy)({event:"load_script_start",provider:"facebook"}),(0,a.Z)((0,s.Z)(e),"FACEBOOK").then(()=>_(t))),p=()=>new Promise(e=>{"undefined"!=typeof window&&window.FB&&window.FB.getLoginStatus(e)}),h=({userID:e,accessToken:t,data:{birthday:o,email:i,first_name:a,gender:s,last_name:l,picture:r}})=>({type:"facebook",facebook_id:e,facebook_token:t,birthday:o?(0,n.Z)(o):void 0,email:i,first_name:a,gender:s,image_url:r&&!r.data.is_silhouette?r.data.url:void 0,last_name:l});async function g(e){let t=(await (0,i.Z)({url:"/v3/facebook/profile_data/",method:"POST",data:{access_token:e,pii_safe_birthday:!0,fields:d}})).resource_response.data||{};return(0,l.My)(t?"pcons.facebook_user.non_empty_user_data_returned":"pcons.facebook_user.empty_user_data_returned"),{access_token:e,birthday:t.birthday,email:t.email,first_name:t.first_name,gender:t.gender,id:t.id,last_name:t.last_name,picture:t.picture}}let m=(e,t)=>new Promise((o,n)=>{if("connected"!==e.status){n({status:e.status||"unknown"});return}let{userID:i,accessToken:a}=e.authResponse;g(a).then(e=>{o({creds:{facebook_id:i,facebook_token:a,facebook_autologin:t?.autologin||!1},signupOptions:h({userID:i,accessToken:a,data:e})})},n)}),f=()=>new Promise(e=>{window.FB.login(e,{scope:c().join(",")})}).then(e=>m(e)),b=async(e,t)=>{await u(e,!1);let o=await p(),n=t?"dweb":"mweb";if("connected"===o.status){(0,l.My)(`${n}.login_data_from_fb_token.connected`);let{userID:e,accessToken:t}=o.authResponse;try{let o=await (0,i.Z)({url:"/v3/facebook/login_data/",data:{facebook_id:e,facebook_token:t}});if(o?.resource_response?.data){let{connected_to_gplus:e,connected_to_google:t,has_password:i}=o.resource_response.data,a=e||t;return(0,l.My)(`${n}.login_data_from_fb_token.success`),{isGoogleConnected:a,hasPassword:i,isFBAuthOnly:!a&&!i}}(0,l.My)(`${n}.login_data_from_fb_token.no_data`)}catch{(0,l.My)(`${n}.login_data_from_fb_token.error`)}}return null}},685667:(e,t,o)=>{o.d(t,{Z:()=>i});let n=e=>{let t=e.replace(/-/g,"_");if(t.startsWith("es"))return"es_LA";if(t.startsWith("ar"))return"ar_AR";switch(t){case"de":return"de_DE";case"fr":return"fr_FR";case"it":return"it_IT";case"ja":return"ja_JP";case"nl":return"nl_NL";case"tr":return"tr_TR";case"en_AU":return"en_US";default:return t}},i=e=>`//connect.facebook.net/${n(e)}/sdk.js`},343931:(e,t,o)=>{o.d(t,{Z:()=>s});var n=o(883119),i=o(144326),a=o(785893);let s=({isInModal:e})=>{let t=(0,i.ZP)();return(0,a.jsx)(n.xu,{alignItems:"center",dangerouslySetInlineStyle:{__style:{backgroundColor:"rgba(255, 255, 255, .5)"}},display:"flex",height:"100%",justifyContent:"center",left:!0,position:e?"absolute":"fixed",top:!0,width:"100%",zIndex:new n.Ry(1),children:(0,a.jsx)(n.$j,{accessibilityLabel:t._('Loading', 'Full page loading state', 'Full page loading state'),show:!0})})}},904945:(e,t,o)=>{o.d(t,{Z:()=>g});var n=o(667294),i=o(616550),a=o(573706),s=o(477058),l=o(730212),r=o(1006),c=o(154785),d=o(463057),_=o(999836),u=o(722952),p=o(415787),h=o(785893);function g({children:e,componentType:t,app_upsell_type:o}){let g=(0,i.TH)(),{flushContextEvents:m,logContextEvent:f}=(0,a.v)(),{viewType:b,viewParameter:x}=(0,s.SU)(),y=(0,c.Z)(),{userAgent:{platform:w}}=(0,l.B)();(0,n.useEffect)(()=>{y({action:"view",item:"download-button",within:o})},[g,o,y]);let v=(0,n.useRef)(!1);(0,n.useEffect)(()=>{b&&202!==b?(f({component:t||13106,element:10308,event_type:9976,view_type:b,view_parameter:x,aux_data:{app_upsell_type:o,app_upsell_is_dupe:v.current}}),v.current=!0):(0,p.nP)("webapp.track_app_upsell_viewed_invalid_parameters",{sampleRate:1,tags:{component:t,view_type:b,view_parameter:x,app_upsell_type:o,app_upsell_is_dupe:v.current}})},[t,f,x,b,o]);let j=(0,_.Z)();return(0,n.useEffect)(()=>{j||(0,r.My)(`mweb.app_upsell.forbidden_upsell.${o}`)},[j,o]),(0,h.jsx)(u.Z,{children:n=>e({handleOpenApp:e=>{y({action:"click",item:"download-button",within:o}),(0,r.NC)("press_open_app",!0),f({component:t||13106,element:10308,event_type:102,view_type:b||202,view_parameter:x,aux_data:{app_upsell_type:o}}),f({component:t||13106,element:10308,event_type:9977,view_type:b||202,view_parameter:x,aux_data:{app_upsell_type:o}}),m(!0),n&&(f({component:t||13106,element:10308,event_type:1701,view_type:b||202,view_parameter:x,aux_data:{app_upsell_type:o}}),n(e?.deepLinkUri??(0,d.Z)(g,"android"===w),o))}})})}},923421:(e,t,o)=>{o.d(t,{Z:()=>n});function n(e){return e.search&&e.search.startsWith("?next=")?e.search.split("?next=")[1]:null}},430575:(e,t,o)=>{o.d(t,{Z:()=>x,u:()=>f});var n=o(667294),i=o(616550),a=o(883119),s=o(449112),l=o(349969),r=o(476198),c=o(144326),d=o(786525),_=o(1006),u=o(154785),p=o(901450),h=o(923421),g=o(72766),m=o(785893);let f="web_siwa_redirect_path",b="id_token=";function x(){let e=(0,c.ZP)(),t=(0,i.TH)(),o=(0,g.f)(),x=(0,i.k6)(),{showToast:y}=(0,p.F9)(),[w,v]=(0,n.useState)(!1),j=(0,u.Z)(),k=t.hash.indexOf(b),A=k>=0?t.hash.substring(k+b.length):null,P=(0,n.useRef)(null);return(0,n.useEffect)(()=>{let n=async n=>{(0,_.My)("in_app_oauth.login.siwa.returned_with_token"),v(!0),o({apple_token:n},x,t.pathname,{noImmediateRedirect:!0},{event_type:7534,view_type:10}).then(()=>{v(!1),(0,_.My)("in_app_oauth.login.siwa.login_success");let e=(0,d.qn)(f);(0,d.L_)(f),(0,s.Z)(e||"/")}).catch(()=>{v(!1),(0,_.My)("in_app_oauth.login.siwa.login_failure"),y(({hideToast:t})=>(0,m.jsx)(r.Z,{onHide:t,text:e._('Oops! You do not have an account connected with Apple. Please try another method.', 'mweb.unauth.oauth_apple_login.login_failure_toast', 'Toast to alert user they failed to login with Apple'),type:"error"}))})};P.current!==A&&A&&n(A),P.current=A},[x,e,A,t,o,y]),w?(0,m.jsx)(a.$j,{accessibilityLabel:e._('Loading...', 'Loading', 'Loading'),show:!0}):(0,m.jsx)(a.iP,{onTap:()=>{j({action:"click",item:"apple-connect-button"});let e=t.state?.next||(0,h.Z)(t),o=e?decodeURIComponent(e):null;(0,d.Nh)(f,o),(0,s.Z)(`https://appleid.apple.com/auth/authorize?client_id=com.pinterest.signinwithapple&redirect_uri=${encodeURIComponent(window.location.origin.toString()+"/oauth/login")}&response_type=${encodeURIComponent("code id_token")}&response_mode=fragment`)},children:(0,m.jsxs)(a.xu,{alignItems:"center",color:"dark",display:"flex",height:40,paddingX:2,paddingY:1,rounding:"pill",width:"100%",children:[(0,m.jsx)(a.xu,{marginStart:-3,marginTop:-2,children:l.Z}),(0,m.jsx)(a.xu,{marginEnd:"auto",marginStart:"auto",children:(0,m.jsx)(a.xv,{color:"light",weight:"bold",children:e._('Continue with Apple', 'mweb.unauth.oauth_apple_login.login_button', 'Text on button allowing users to login with their Apple account')})})]})})}},45719:(e,t,o)=>{o.d(t,{Z:()=>c});var n=o(667294),i=o(883119),a=o(758339),s=o(144326),l=o(1006),r=o(785893);function c({onDismiss:e}){let t=(0,s.ZP)();(0,n.useEffect)(()=>{(0,l.My)("unauth_mweb.login_rate_limited.view")},[]);let o=t._('Oops! Too many login attempts', 'LoginRateLimitedModal.Modal.Heading', 'Modal heading for user who have tried to login too many times');return(0,r.jsxs)(a.ZP,{accessibilityModalLabel:o,heading:(0,r.jsxs)(i.xu,{"data-test-id":"login-rate-limited-header",children:[(0,r.jsx)(i.xu,{display:"flex",justifyContent:"center",padding:6,children:(0,r.jsx)(i.JO,{accessibilityLabel:t._('Pinterest logo', 'Accessibility label for Pinterest icon', 'Accessibility label for Pinterest icon'),color:"brandPrimary",icon:"pinterest",size:40})}),(0,r.jsx)(i.X6,{accessibilityLevel:1,align:"center",size:"500",children:o})]}),isOpen:!0,onDismiss:e,children:[(0,r.jsx)(i.xu,{"data-test-id":"login-rate-limited-text",marginBottom:8,marginTop:4,paddingX:12,children:(0,r.jsx)(i.xv,{align:"center",children:t._('You have reached the maximum number of login attempts. Try again in 30 minutes.', 'LoginRateLimitedModal.Modal.Heading', 'Modal heading for user who have tried to login too many times')})}),(0,r.jsx)(i.xu,{"data-test-id":"login-rate-limited-footer",marginBottom:8,paddingX:12,children:(0,r.jsx)(i.zx,{color:"red",fullWidth:!0,onClick:e,text:t._('Okay', 'LoginRateLimitedModal.Modal.OkButton', 'Okay button used to close modal')})})]})}},249997:(e,t,o)=>{o.d(t,{Z:()=>f});var n=o(667294),i=o(883119),a=o(934980),s=o(512541);let l={yellow:"#FAB904",orange:"#FF6400",green:"#0FA573",blue:"#0074e8",purple:"#B469EB"},r="DelightfulBubbles__",c=(e,t)=>{let o=e.length,n=e.indexOf(t)+1>=o?0:e.indexOf(t)+1;return e[n]},d=[`${r}fadeIn {
  to {
    opacity: 1;
  }
}
`,`${r}growShrink {
  0% {
    transform: scale(0);
  }
  50% {
    transform: scale(1);
  }
  100% {
    transform: scale(0);
  }
}
`,`${r}swirl {
  0% {
    transform: rotate(0deg) translateX(-50%);
  }
  100% {
    transform: rotate(-360deg) translateX(-50%);
  }
}
`,...(()=>{let e=Object.keys(l);return e.map(t=>{let o=c(e,t);return`${r}colorChange_${t} {
      0% {
        background-color: ${l[t]};
      }
      50% {
        background-color: ${l[o]};
      }
    }
    `})})()],_=(0,a.Ll)(d),u=(e,t,o,n,i,a,s,c)=>({bubblePositionStyles:{position:"absolute",marginLeft:`${a/2-i}px`,marginTop:`${o/2-i}px`,left:`${s}px`,top:`${c}px`},bubbleSwirlStyles:{animation:`${r}swirl 6s ease-in-out ${e}s infinite forwards`,WebkitAnimation:`${r}swirl 6s ease-in-out ${e}s infinite forwards`},bubbleGrowShrinkStyles:{transform:"scale(0)",WebkitTransform:"scale(0)",animation:`${r}growShrink 6s ease-in-out ${e}s infinite alternate`,WebkitAnimation:`${r}growShrink 6s ease-in-out ${e}s infinite alternate`},bubbleShapeStyles:{height:`${t}px`,width:`${t}px`,borderRadius:"50%",backgroundColor:l[n],opacity:0,animation:`${r}colorChange_${n} 12s steps(1, start) ${e}s infinite forwards,
      ${r}fadeIn 3s linear ${e}s 1 forwards`,WebkitAnimation:`${r}colorChange_${n} 12s steps(1, start) ${e}s infinite forwards,
      ${r}fadeIn 3s linear ${e}s 1 forwards`}});var p=o(785893);function h(e,t,o){var n;return(t="symbol"==typeof(n=function(e,t){if("object"!=typeof e||!e)return e;var o=e[Symbol.toPrimitive];if(void 0!==o){var n=o.call(e,t||"default");if("object"!=typeof n)return n;throw TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(t,"string"))?n:n+"")in e?Object.defineProperty(e,t,{value:o,enumerable:!0,configurable:!0,writable:!0}):e[t]=o,e}let g=e=>{let{delay:t,diameter:o,height:n,initialColor:a,width:s,xOffset:l,yOffset:r}=e,c=Math.floor(o/2),d=u(t,o,n,a,c,s,l,r);return(0,p.jsx)(i.xu,{dangerouslySetInlineStyle:{__style:d.bubblePositionStyles},children:(0,p.jsx)(i.xu,{dangerouslySetInlineStyle:{__style:d.bubbleSwirlStyles},children:(0,p.jsx)(i.xu,{dangerouslySetInlineStyle:{__style:d.bubbleGrowShrinkStyles},children:(0,p.jsx)(i.xu,{dangerouslySetInlineStyle:{__style:d.bubbleShapeStyles}})})})})};class m extends n.Component{constructor(...e){super(...e),h(this,"state",{isInitialized:!1})}componentDidMount(){window.requestAnimationFrame(()=>{this.setState({isInitialized:!0})})}shouldComponentUpdate(e,t){return e.numBubbles!==this.props.numBubbles||!t.isInitialized===this.state.isInitialized}getSize(){let{width:e,height:t}=this.props;return void 0!==e&&void 0!==t?{width:e,height:t}:this.containerElement?{height:this.containerElement.offsetHeight,width:this.containerElement.offsetWidth}:{height:void 0,width:void 0}}createBubbles(e,t){let{delayFactor:o,delayOffset:n,numBubbles:i,xRadiusAdjustment:s,yRadiusAdjustment:r}=this.props,c=e+2*r,d=t+2*s,_=[],u=Object.keys(l);for(let s=0;s<i;s+=1){let i=16+(0,a.XF)(-4,4),l=u[s%u.length],{x:r,y:h}=(0,a.CC)(c,d);_.push((0,p.jsx)(g,{delay:s*o+n,diameter:i,height:e,initialColor:l,width:t,xOffset:r,yOffset:h},s))}return _}render(){let{isDesktop:e}=this.props,{height:t,width:o}=this.getSize();return(0,p.jsxs)(i.xu,{height:t,position:"relative",width:o,children:[(0,p.jsx)(s.Z,{unsafeCSS:_}),(0,p.jsxs)(i.xu,{ref:e=>this.containerElement=e,position:e?void 0:"absolute",children:[this.state.isInitialized&&this.createBubbles(t||0,o||0),(0,p.jsx)(i.xu,{position:"relative",children:this.props.children})]})]})}}h(m,"defaultProps",{numBubbles:10,xRadiusAdjustment:0,yRadiusAdjustment:0,delayFactor:1,delayOffset:0});let f=m},578266:(e,t,o)=>{o.d(t,{Z:()=>p});var n=o(667294),i=o(883119),a=o(952522),s=o(212515),l=o(144326),r=o(730212),c=o(343931),d=o(249997),_=o(844745),u=o(785893);function p({isReducedHeader:e,progressBarAnimationDuration:t}){let o=(0,l.ZP)(),{country:p}=(0,r.B)(),h=(0,_.Z)(p);return(0,u.jsx)(n.Fragment,{children:h?(0,u.jsx)(s.Z,{log:{view_type:10,view_parameter:259},children:(0,u.jsxs)(i.xu,{bottom:!0,color:"default",left:!0,position:"fixed",right:!0,top:!0,width:"100%",children:[(0,u.jsx)(a.Z,{color:"dark",duration:t||3e3,finalProgress:95}),(0,u.jsxs)(i.kC,{alignItems:"stretch",direction:"column",height:"100%",justifyContent:"start",children:[(0,u.jsxs)(i.xu,{"data-test-id":"account-creation-heading",margin:10,children:[(0,u.jsx)(i.X6,{overflow:"normal",size:e?"500":"600",children:o._('Your account is being created!', 'account created heading', 'account created heading')}),(0,u.jsx)(i.xv,{overflow:"normal",children:o._('You can now save ideas, get personalized recommendations, and more', 'loading state description while waiting for any sign up registration to complete', 'loading state description while waiting for any sign up registration to complete')})]}),(0,u.jsx)(i.kC,{alignItems:"center",flex:"grow",justifyContent:"center",children:(0,u.jsx)(d.Z,{delayOffset:-5,isDesktop:!1,xRadiusAdjustment:40,yRadiusAdjustment:40,children:(0,u.jsx)(i.xu,{alignItems:"center",color:"lightWash",direction:"column",display:"flex",height:120,justifyContent:"end",overflow:"hidden",rounding:"circle",width:120,children:(0,u.jsx)(i.JO,{accessibilityLabel:o._('Loading', 'Loading state for any sign up registration', 'Loading state for any sign up registration'),color:"subtle",icon:"person",size:"90"})})})})]})]})}):(0,u.jsx)(c.Z,{})})}},1856:(e,t,o)=>{o.d(t,{Z:()=>H});var n=o(667294),i=o(545007),a=o(616550),s=o(883119),l=o(279812),r=o(488792),c=o(644845),d=o(194093),_=o(476198),u=o(144326),p=o(267005),h=o(719174),g=o(844543),m=o(765963),f=o(297728),b=o(730212),x=o(1006),y=o(154785),w=o(896612),v=o(901450),j=o(383399),k=o(343931),A=o(430575),P=o(369081),C=o(244734),z=o(785893);let S="rgb(0, 116, 232)";function Z(e){let t=(0,n.useRef)(null),o=(0,u.ZP)(),{locale:i}=(0,b.B)(),{checkExperiment:a}=(0,f.F)(),{anyEnabled:l}=a("mweb_facebook_disabled"),r=a("mweb_unauth_turn_on_personalized_fb_button").anyEnabled?"true":void 0,[c,d]=(0,n.useState)(!1),[_,p]=(0,n.useState)(!1);(0,n.useEffect)(()=>{l||(t.current&&(t.current.style.backgroundColor=S),(async()=>{await (0,P.we)(i),d(!0)})(),(0,x.My)("pcons.facebook_connect_button_renderd"))},[i,l]);let h=()=>{(0,x.EX)({event:"start",provider:"facebook"}),e.onTouch(),l?p(!0):c&&(async()=>{try{let{creds:t,signupOptions:o}=await (0,P.JF)();e.onConnectSuccess(t,o)}catch(t){e.onConnectError()}})()};return(0,z.jsxs)(s.xu,{"data-test-id":"FacebookConnectContainer",position:"relative",width:"100%",children:[(0,z.jsx)(()=>(0,z.jsx)(s.xu,{bottom:!0,dangerouslySetInlineStyle:{__style:{pointerEvents:"none"}},left:!0,position:"absolute",right:!0,rounding:5,top:!0,children:(0,z.jsx)("div",{className:"fb-login-button","data-auth-type":e.isRerequest?"rerequest":void 0,"data-auto-logout-link":"false","data-button-type":"continue_with","data-layout":"rounded","data-max-rows":"1","data-scope":(0,P._V)().join(","),"data-show-faces":"false","data-size":"large","data-use-continue-as":r,"data-width":"100%"})}),{}),(0,z.jsx)(s.iP,{"data-test-id":"FacebookConnectButton",fullWidth:!0,onTap:()=>h(),children:(0,z.jsx)(s.xu,{ref:t,height:40,paddingX:3,rounding:"pill",width:"100%",children:(0,z.jsxs)(s.kC,{alignItems:"center",height:"100%",justifyContent:"center",width:"100%",children:[(0,z.jsx)(()=>{let e=(0,n.useRef)(null),t="facebook";return(0,n.useEffect)(()=>{if(e.current){let o=e.current.children||[],n=Array.prototype.find.call(o,e=>e.ariaLabel===t);n&&(n.style.color=S)}}),(0,z.jsx)(s.xu,{ref:e,color:"light",dangerouslySetInlineStyle:{__style:{paddingTop:"5px",paddingLeft:"3px",paddingRight:"2px"}},marginEnd:1,rounding:"circle",children:(0,z.jsx)(s.JO,{accessibilityLabel:o._('facebook', 'accessible label for facebook icon', 'accessible label for facebook icon'),icon:t,size:19})})},{}),(0,z.jsx)(s.xv,{color:"light",size:"300",weight:"bold",children:o._('Continue with Facebook', 'Login page button', 'Login page button')})]})})}),_&&(0,z.jsx)(C.Z,{onDismiss:()=>p(!1),type:"facebook"})]})}var L=o(863266);function E(e){let t=(0,u.ZP)(),{locale:o}=(0,b.B)();return(0,z.jsx)(s.iP,{fullWidth:!0,onTap:()=>{e.onTouch(),(0,L.Z)(o,{success:t=>"line_id_token"in t?e.onConnectSuccess(t,{...t,type:"line"}):null,error:e.onConnectError})},children:(0,z.jsx)(s.xu,{dangerouslySetInlineStyle:{__style:{backgroundColor:"#00C300"}},"data-test-id":"LineConnectContainer",height:40,paddingX:3,rounding:"pill",children:(0,z.jsxs)(s.kC,{alignItems:"center",height:"100%",justifyContent:"center",children:[(0,z.jsx)(s.xu,{height:32,width:32,children:(0,z.jsx)(s.Ee,{alt:t._('line', 'accessible label for line icon', 'accessible label for line icon'),naturalHeight:32,naturalWidth:32,src:"https://s.pinimg.com/webapp/btn_base-a34b3f23.png"})}),(0,z.jsx)(s.xv,{color:"light",size:"300",weight:"bold",children:t._('Continue with LINE', 'Login page button', 'Login page button')})]})})})}var O=o(45719),T=o(171707),B=o(578266),$=o(72766),M=o(834945),F=o(335108),I=o(812477),R=o(904945);function U({app_upsell_type:e}){let t=(0,u.ZP)(),o=(0,a.TH)(),{userAgent:{platform:n}}=(0,b.B)(),i=(0,y.Z)(),{trackConversionUpsell:l}=(0,w.Z)(),{pathname:r}=o;return(0,z.jsx)(s.xu,{"data-test-id":"continue-app-button",marginBottom:2,children:(0,z.jsx)(R.Z,{app_upsell_type:e??"unauth-signup-modal",componentType:13858,children:({handleOpenApp:a})=>(0,z.jsx)(s.zx,{color:"red",fullWidth:!0,onClick:()=>{l({element:10308,eventType:14689}),i({action:"click",item:"handle-open-app-button",within:"homepage_top_module"===e?"homepage-top-section":"homepage-bottom-section"}),r&&a({deepLinkUri:"/"===r?"/":(0,I.Z)(o)&&("ios"===n||"ipad"===n)?"user"+r:r.substr(1)})},text:t._('Get Pinterest App', 'unauth.modal.get_app.button_text', 'App download button text')})})})}var W=o(748327),D=o(803792);function H({apple:e,facebook:t,fbConnectHandler:o,footer:P,from:C,google:S,isBusiness:L,isRerequest:I,line:R,next:H="/",noImmediateRedirect:N,disableFBSignup:X,onFacebookTouch:G,onLoginTouch:K,onSignupTouch:J,showAppInstallButton:q,showEmailButton:Y,showTextDivider:V,viewParameter:Q,app_upsell_type:ee,attributionLabel:et,disableGoogleSignup:eo}){let en=(0,a.k6)(),ei=(0,a.TH)(),{country:ea}=(0,b.B)(),es=(0,u.ZP)(),{showToast:el}=(0,v.F9)(),er=(0,r.Z)(),ec=(0,y.Z)(),ed=(0,i.I0)(),e_=(0,$.f)(),eu=(0,D.U)(),{flush:ep}=(0,f.F)(),eh=(0,M.m)(),eg=(0,l.Z)(),{isAuth:em,isLimitedLogin:ef}=(0,j.Z)(),[eb,ex]=(0,n.useState)(null),[ey,ew]=(0,n.useState)(!1),[ev,ej]=(0,n.useState)("default"),{trackConversionUpsell:ek}=(0,w.Z)(),eA="facebook"===ev&&5e3||"google"===ev&&4e3||void 0;(0,n.useEffect)(()=>{eu&&(P&&eu.preload?.(W.ke("login.js")),Y&&eu.preload?.(W.ke("signup.js")))},[]);let eP=em?{login_state:ef?h.Z.LIMITED:h.Z.DEFAULT}:Object.freeze({}),eC=e=>{er({view_type:10,view_parameter:Q,element:e,event_type:102,aux_data:eP})},ez=e=>{ek({viewType:10,viewParameter:Q,eventType:14689,element:e})},eS=(e,t)=>{let o,n;switch(t){case"facebook":o=3205,n=m.Z.FACEBOOK;break;case"google":o=3204,n=m.Z.GPLUS;break;case"line":o=3556,n=m.Z.LINE}return{event_type:e,view_type:10,view_parameter:o,element:n===m.Z.GPLUS?12981:void 0,aux_data:{...eP,signup_login_method:n,upsell_reason:et}}},eZ=(e,t,o,n)=>{ex(null);let i=()=>el(({hideToast:e})=>(0,z.jsx)(_.Z,{onHide:e,text:(0,d.Z)(t,"api_error_code")&&(0,d.Z)(t,"message")||es._('Sorry, we can\'t log you in.', 'Error message when user having trouble login in.', 'Error message when user having trouble login in.')}));if(t){if((0,x.My)(`unauth_mweb.login_error.api_error_code.${String((0,d.Z)(t,"api_error_code"))}`),[p.xN,p.lg,p.Pv].includes((0,d.Z)(t,"api_error_code")??-1)){if("facebook"===o.type){X?.();return}if(eo&&"google"===o.type){(0,x.My)("unauth_mweb.account_recovery.google_account_already_not_linked"),el(({hideToast:e})=>(0,z.jsx)(_.Z,{onHide:e,text:es._('This Google account is not linked to Pinterest. Try another one', 'account_recovery.error.google_account_not_linked', 'Error toast when user tries to login with a Google account that is not linked to Pinterest'),type:"error"}));return}(0,x.Rp)({event:"start",provider:n}),(()=>{(0,x.My)("unauth_mweb.facebook_signup_attempt"),o.gender||(0,x.My)("unauth_mweb.facebook_signup_attempt.nogender");let{birthday:e}=o;if(void 0===e||!(0,c.Z)(e)){ep(),en.push({pathname:"/signup/thirdpartyage/",state:{signupOptions:"facebook"===o.type?{...o,email_source_site:g.E_.FACEBOOK}:o,progressBarAnimationDuration:eA,attributionLabel:et}});return}ex("signup"),ej(n);let t="facebook"===o.type?{...o,email_source_site:g.E_.FACEBOOK,birthday_source_site:g.E_.FACEBOOK,birthday:e}:{...o,birthday:e};(0,x.Rp)({event:"signup_api_call_start",provider:n}),eh(t,{signupAttemptContextEvent:eS(7537,n)}).then(()=>{(0,x.NC)("signup_via_login_buttons"),(0,x.Rp)({event:"signup_api_call_success",provider:n}),["facebook","google"].includes(n)&&eg(H||"/"),ex(null)},e=>{(0,x.Rp)({event:"signup_api_call_failure",provider:n});let t=(0,d.Z)(e,"api_error_code");"line"===o.type&&(t===p.iZ?en.push({pathname:"/signup/line-email-collect/",state:{signupOptions:o,attributionLabel:et}}):t===p.NF&&en.push({pathname:"/signup/thirdpartyage/",state:{signupOptions:o,attributionLabel:et}})),el(({hideToast:o})=>(0,z.jsx)(_.Z,{onHide:o,text:t&&(0,d.Z)(e,"message")||es._('Sorry! Something went wrong on our end.', 'Error logging on', 'Error logging on')})),ex(null)})})()}else p.ik.includes((0,d.Z)(t,"api_error_code")??0)&&ew(!0);i()}else(0,x.My)("unauth_mweb.login.unexpected_error"),i()},eL=e=>(t,n)=>{let i="google"===e?"gsi_btn":"other",a=ei.state?.switch_account==="true"?{isSwitchAccount:!0,trigger:i}:{noImmediateRedirect:N,trigger:i};"facebook"===e&&(o?.("success"),(0,x.EX)({event:"receive_credential_response_from_provider",provider:e})),(0,x.NC)(e+"_login_success"),e_(t,en,H,a,eS(7534,e)).catch(o=>{eZ(t,o,n,e)}),ex("login"),ej(e)},eE=({event:e})=>{e.stopPropagation(),e.preventDefault(),K?.(),C&&ed((0,F.rm)(C)),ec({action:"click",item:"login-button"}),eC(30),(0,x.My)(`unauth_mweb.login_buttons.footer.${P?.type||"button"}`),(0,x.NC)("press_login"),ek({eventType:14689,element:30,viewType:10,viewParameter:Q}),ek({eventType:14688,component:14213,upsellReason:et,incrementUpsellReasonCounter:!1}),en.push({pathname:L?"/business/login/":"/login/",search:ei.search,state:{next:H,attributionLabel:et}})};return(0,z.jsxs)(s.xu,{"data-test-id":"LoginButtonsContainer",marginEnd:"auto",marginStart:"auto",marginTop:L?-5:0,maxWidth:eo?502:400,children:[ey&&(0,z.jsx)(O.Z,{onDismiss:()=>ew(!1)}),V&&(0,z.jsx)(s.xu,{marginBottom:3,marginTop:3,children:(0,z.jsx)(s.xv,{align:"center",size:"100",weight:"bold",children:es._('OR', 'Separator for email login button and social login button', 'Separator for email login button and social login button')})}),(0,z.jsx)(s.xu,{marginBottom:6,children:(0,z.jsxs)(n.Fragment,{children:[q&&(0,z.jsx)(U,{app_upsell_type:ee}),Y&&(0,z.jsx)(s.xu,{"data-test-id":"continue-email-button",marginBottom:L?-2:2,children:(0,z.jsx)(s.zx,{color:q?"gray":"red",fullWidth:!0,onClick:({event:e})=>{e&&(e.stopPropagation(),e.preventDefault()),(0,x.NC)("press_email_signup"),(0,x.Rp)({event:"start",provider:"email"}),ec({action:"click",item:"email-signup-button"}),J?.(),C&&ed((0,F.rm)(C)),ez(13506),eC(31),ek({eventType:14688,component:14215,upsellReason:et,incrementUpsellReasonCounter:!1}),en.push({pathname:L?"/business/signup/step1/":"/signup/step1/",search:ei.search,state:{next:H,attributionLabel:et}})},text:L?es._('Create account', 'Button text for creating a business account', 'Button text for creating a business account'):es._('Continue with email', 'Sign up button', 'Sign up button')})}),t&&(0,z.jsx)(s.xu,{"data-test-id":"facebook-connect-button",marginBottom:2,children:(0,z.jsx)(Z,{isRerequest:I??!1,onConnectError:()=>{o?.("error"),(0,x.EX)({event:"receive_no_credential_response_from_provider",provider:"facebook"}),el(({hideToast:e})=>(0,z.jsx)(_.Z,{onHide:e,text:es._('Unable to connect to Facebook', 'Error logging on with Facebook', 'Error logging on with Facebook')}))},onConnectSuccess:eL("facebook"),onTouch:()=>{G?.(),ez(13505),ec({action:"click",item:"facebook-connect-button"}),eC(68)}})}),S&&(0,z.jsx)(s.xu,{"data-test-id":"google-connect-button",marginBottom:2,children:(0,z.jsx)(T.Z,{onGoogleConnectSuccess:eL("google"),onTouch:()=>{ez(13504),eo&&er({event_type:15392,component:15214,element:13504})}})}),R&&"JP"===ea&&(0,z.jsx)(s.xu,{"data-test-id":"line-connect-button",marginBottom:2,children:(0,z.jsx)(E,{onConnectError:()=>el(({hideToast:e})=>(0,z.jsx)(_.Z,{onHide:e,text:es._('Unable to connect to Line', 'Error logging on with Line', 'Error logging on with Line')})),onConnectSuccess:eL("line"),onTouch:()=>{ez(13507),eC(12277),ec({action:"click",item:"line-connect-button"})}})}),e&&(0,z.jsx)(s.xu,{"data-test-id":"apple-connect-button",marginBottom:2,children:(0,z.jsx)(A.Z,{})})]})}),P&&("member_link"===P.type?(0,z.jsx)(s.xu,{"data-test-id":"login-member",marginTop:P.isUnauthHomepageOnMobile?10:-4,children:(0,z.jsx)(s.iP,{onTap:({event:e})=>eE({event:e}),tapStyle:"none",children:(0,z.jsx)(s.xu,{marginBottom:P.increasedSpaceBelow?-1:-2,paddingY:P.noPadding?0:4,children:(0,z.jsx)(s.xv,{align:"center",color:P.textColorIsLight?"light":"default",size:"200",weight:"bold",children:es._('Already a member? Log in', 'Link on mobile web sign up modal to direct unauth users to the login page', 'Link on mobile web sign up modal to direct unauth users to the login page')})})})}):(0,z.jsx)(s.xu,{"data-test-id":"login-button",marginBottom:5,children:(0,z.jsx)(s.zx,{color:"transparent",fullWidth:!0,onClick:eE,text:es._('Log in', 'Login page button', 'Login page button')})})),eb&&("signup"===eb?(0,z.jsx)(B.Z,{progressBarAnimationDuration:eA}):(0,z.jsx)(k.Z,{}))]})}}}]);
//# sourceMappingURL=https://sm.pinimg.com/webapp/55803-3d0af69d6c99946d.mjs.map