var f=Object.defineProperty,l=Object.defineProperties;var m=Object.getOwnPropertyDescriptors;var o=Object.getOwnPropertySymbols;var d=Object.prototype.hasOwnProperty,u=Object.prototype.propertyIsEnumerable;var p=(e,t,i)=>t in e?f(e,t,{enumerable:!0,configurable:!0,writable:!0,value:i}):e[t]=i,r=(e,t)=>{for(var i in t||(t={}))d.call(t,i)&&p(e,i,t[i]);if(o)for(var i of o(t))u.call(t,i)&&p(e,i,t[i]);return e},s=(e,t)=>l(e,m(t));import{b as a}from"./index-5ea60806.js";import{d as h}from"./chartEditStore-87bc983c.js";import{aA as g,as as n}from"./index-3da848c6.js";import"./_arrayMap-23a2d4b9.js";import"./tables_list-7cb7cb60.js";import"./http-5398a097.js";import"./plugin-3ade9cd9.js";import"./icon-42e1d81a.js";import"./SettingItemBox-6900e67c.js";/* empty css                                                                   */import"./CollapseItem-95d54d26.js";const C={dataset:10*60,useEndDate:!1,endDate:new Date().getTime(),style:"\u65F6\u5206\u79D2",showDay:!1,flipperBgColor:"#16293E",flipperTextColor:"#4A9EF8FF",flipperWidth:30,flipperHeight:50,flipperRadius:5,flipperGap:10,flipperType:"down",flipperSpeed:450};class z extends h{constructor(){super(...arguments),this.key=a.key,this.attr=s(r({},g),{w:500,h:100,zIndex:-1}),this.chartConfig=n(a),this.option=n(C)}}export{z as default,C as option};