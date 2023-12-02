import{b as $,d as I,n as z,Y as H,Z as P,P as g,L as F,r as n,o as a,E as _,w as e,f as t,g as A,t as E,u as o,W as S,c as O,q as V,F as R,$ as G,a0 as q,a1 as X,a2 as Y,l as Z,j as D,p as w,a3 as j,a4 as T,a5 as J,a6 as Q,a7 as x,a8 as B,a9 as L,N as ee,aa as te,U as oe,O as ne,m as ae,ab as le,ac as se,X as ce,ad as _e}from"./index-67a30bc6.js";import{i as M}from"./icon-99a136c4.js";import{_ as de}from"./index-ea65417e.js";import"./index-9e9f2d34.js";import"./theme-color-0deb5eeb.js";const re=I({__name:"index",props:{show:Boolean},emits:["close"],setup(l,{emit:s}){const i=l,{FishIcon:c,CloseIcon:d}=M.ionicons5,{StoreIcon:p,ObjectStorageIcon:m}=M.carbon,y=window.$t,f=z([{title:H("project.new_project"),key:P.CHART_HOME_NAME,icon:c,disabled:!1},{title:H("project.my_templete"),key:g.BASE_HOME_TEMPLATE_NAME,icon:m,disabled:!0},{title:H("project.template_market"),key:g.BASE_HOME_TEMPLATE_MARKET_NAME,icon:p,disabled:!0}]);F(i,v=>{v.show||u()});const u=()=>{s("close",!1)},r=v=>{u();const h=q(),b=X(P.CHART_HOME_NAME,"href");Y(b,[h],void 0,!0)};return(v,h)=>{const b=n("n-text"),C=n("n-icon"),K=n("n-button"),N=n("n-space"),W=n("n-card"),U=n("n-modal");return a(),_(U,{show:l.show,"onUpdate:show":h[0]||(h[0]=k=>G(show)?show.value=k:null),class:"go-create-modal"},{default:e(()=>[t(N,{size:"large"},{default:e(()=>[t(W,{class:"card-box",hoverable:""},{header:e(()=>[t(b,{class:"card-box-tite"},{default:e(()=>[A(E(o(y)("project.create_tip")),1)]),_:1})]),"header-extra":e(()=>[t(b,{onClick:u},{default:e(()=>[t(C,{size:"20"},{default:e(()=>[(a(),_(S(o(d))))]),_:1})]),_:1})]),action:e(()=>[]),default:e(()=>[t(N,{class:"card-box-content",justify:"center"},{default:e(()=>[(a(!0),O(R,null,V(f,k=>(a(),_(K,{size:"large",disabled:k.disabled,key:k.key,onClick:r},{icon:e(()=>[t(C,{size:"18"},{default:e(()=>[(a(),_(S(k.icon)))]),_:2},1024)]),default:e(()=>[(a(),_(S(k.title)))]),_:2},1032,["disabled"]))),128))]),_:1})]),_:1})]),_:1})]),_:1},8,["show"])}}});var ie=$(re,[["__scopeId","data-v-4cae752e"]]);const ue=I({__name:"index",props:{collapsed:Boolean},setup(l){const{DuplicateIcon:s,DuplicateOutlineIcon:i}=M.ionicons5,c=Z(),d=D(!1),p=()=>{d.value=!0},m=()=>{d.value=!1};return(y,f)=>{const u=n("n-icon"),r=n("n-button"),v=n("n-tooltip");return a(),O(R,null,[w("div",{onClick:p},[l.collapsed?(a(),_(v,{key:0,placement:"right",trigger:"hover"},{trigger:e(()=>[t(r,{ghost:"",type:"primary",size:"small"},{icon:e(()=>[t(u,null,{default:e(()=>[j(t(o(i),null,null,512),[[T,o(c).getDarkTheme]]),j(t(o(s),null,null,512),[[T,!o(c).getDarkTheme]])]),_:1})]),_:1})]),default:e(()=>[w("span",null,E(y.$t("project.create_btn")),1)]),_:1})):(a(),_(r,{key:1,ghost:"",type:"primary"},{icon:e(()=>[t(u,null,{default:e(()=>[j(t(o(i),null,null,512),[[T,o(c).getDarkTheme]]),j(t(o(s),null,null,512),[[T,!o(c).getDarkTheme]])]),_:1})]),default:e(()=>[w("span",null,E(y.$t("project.create_btn")),1)]),_:1}))]),t(o(ie),{show:d.value,onClose:m},null,8,["show"])],64)}}});const pe={class:"go-aside-footer"},me=I({__name:"index",props:{collapsed:Boolean},setup(l){const{DocumentTextIcon:s,CodeSlashIcon:i}=M.ionicons5,c=()=>{J()},d=()=>{Q()};return(p,m)=>{const y=n("n-divider"),f=n("n-icon"),u=n("n-button"),r=n("n-text"),v=n("n-tooltip"),h=n("n-space");return a(),O("div",pe,[t(y,{class:"go-mt-0"}),t(h,{justify:"space-around"},{default:e(()=>[l.collapsed?(a(),_(v,{key:0,placement:"right",trigger:"hover"},{trigger:e(()=>[t(u,{secondary:"",onClick:c},{icon:e(()=>[t(f,{size:"18"},{default:e(()=>[t(o(s))]),_:1})]),_:1})]),default:e(()=>[t(r,null,{default:e(()=>[A(E(p.$t("global.doc")),1)]),_:1})]),_:1})):(a(),_(u,{key:1,secondary:"",onClick:c},{icon:e(()=>[t(f,{size:"18"},{default:e(()=>[t(o(s))]),_:1})]),default:e(()=>[t(r,null,{default:e(()=>[A(E(p.$t("global.doc")),1)]),_:1})]),_:1})),l.collapsed?(a(),_(v,{key:2,placement:"right",trigger:"hover"},{trigger:e(()=>[t(u,{secondary:"",onClick:c},{icon:e(()=>[t(f,{size:"18"},{default:e(()=>[t(o(i))]),_:1})]),_:1})]),default:e(()=>[t(r,null,{default:e(()=>[A(E(p.$t("global.code_addr")),1)]),_:1})]),_:1})):(a(),_(u,{key:3,secondary:"",onClick:d},{icon:e(()=>[t(f,{size:"18"},{default:e(()=>[t(o(i))]),_:1})]),default:e(()=>[j(t(r,null,{default:e(()=>[A(E(p.$t("global.code_addr")),1)]),_:1},512),[[T,!l.collapsed]])]),_:1}))]),_:1})])}}});var fe=$(me,[["__scopeId","data-v-9719eb6a"]]);const{GridIcon:Le,TvOutlineIcon:ve}=M.ionicons5,{StoreIcon:ye,ObjectStorageIcon:he,DevicesIcon:ge}=M.carbon,Ee=()=>["all-project"],be=()=>{const l=window.$t;return z([{key:"divider-1",type:"divider"},{label:()=>x("span",null,{default:()=>l("project.project")}),key:"all-project",icon:B(ge),children:[{type:"group",label:()=>x("span",null,{default:()=>l("project.my")}),key:"my-project",children:[{label:()=>x(L,{to:{name:g.BASE_HOME_ITEMS_NAME}},{default:()=>l("project.all_project")}),key:g.BASE_HOME_ITEMS_NAME,icon:B(ve)},{label:()=>x(L,{to:{name:g.BASE_HOME_TEMPLATE_NAME}},{default:()=>l("project.my_templete")}),key:g.BASE_HOME_TEMPLATE_NAME,icon:B(he)}]}]},{key:"divider-2",type:"divider"},{label:()=>x(L,{to:{name:g.BASE_HOME_TEMPLATE_MARKET_NAME}},{default:()=>l("project.template_market")}),key:g.BASE_HOME_TEMPLATE_MARKET_NAME,icon:B(ye)}])};const ke={class:"go-project-sider-flex"},we={class:"sider-bottom"},Me=I({__name:"index",setup(l){const s=D(!1),{getAsideCollapsedWidth:i}=ee(te()),c=oe(),d=ne(()=>c.name),p=D(d),m=be(),y=Ee(),f=()=>{document.body.clientWidth<=950?s.value=!0:s.value=!1};return ae(()=>{window.addEventListener("resize",f)}),le(()=>{window.removeEventListener("resize",f)}),(u,r)=>{const v=n("n-space"),h=n("n-menu"),b=n("n-layout-sider");return a(),_(b,{class:"go-project-sider",bordered:"","collapse-mode":"width","show-trigger":"bar",collapsed:s.value,"native-scrollbar":!1,"collapsed-width":o(i),width:o(se),onCollapse:r[0]||(r[0]=C=>s.value=!0),onExpand:r[1]||(r[1]=C=>s.value=!1)},{default:e(()=>[w("div",ke,[w("aside",null,[t(v,{vertical:"",class:"go-project-sider-top"},{default:e(()=>[t(o(ue),{collapsed:s.value},null,8,["collapsed"])]),_:1}),t(h,{value:p.value,options:o(m),"collapsed-width":o(i),"collapsed-icon-size":22,"default-expanded-keys":o(y)},null,8,["value","options","collapsed-width","default-expanded-keys"])]),w("div",we,[t(o(fe),{collapsed:s.value},null,8,["collapsed"])])])]),_:1},8,["collapsed","collapsed-width","width"])}}});var xe=$(Me,[["__scopeId","data-v-31f754a3"]]);const Ae={};function je(l,s){const i=n("router-view");return a(),_(i,null,{default:e(({Component:c,route:d})=>[t(_e,{name:"fade",mode:"out-in",appear:""},{default:e(()=>[d.noKeepAlive?(a(),_(S(c),{key:d.fullPath})):(a(),_(ce,{key:1},[(a(),_(S(c),{key:d.fullPath}))],1024))]),_:2},1024)]),_:1})}var Te=$(Ae,[["render",je]]);const Se={class:"go-project"},$e=I({__name:"index",setup(l){return(s,i)=>{const c=n("n-space"),d=n("router-view"),p=n("n-layout-content"),m=n("n-layout");return a(),O("div",Se,[t(m,{"has-sider":"",position:"absolute"},{default:e(()=>[t(c,{vertical:""},{default:e(()=>[t(o(xe))]),_:1}),t(m,null,{default:e(()=>[t(o(de)),t(m,{id:"go-project-content-top",class:"content-top",position:"absolute","native-scrollbar":!1},{default:e(()=>[t(p,null,{default:e(()=>[t(o(Te),null,{default:e(()=>[t(d)]),_:1})]),_:1})]),_:1})]),_:1})]),_:1})])}}});var De=$($e,[["__scopeId","data-v-d9a83266"]]);export{De as default};