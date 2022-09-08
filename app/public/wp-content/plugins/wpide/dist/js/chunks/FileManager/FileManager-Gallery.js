/*! For license information please see FileManager-Gallery.js.LICENSE.txt */
(self.webpackChunkwpide=self.webpackChunkwpide||[]).push([[632],{3741:(t,e,r)=>{"use strict";r.r(e),r.d(e,{default:()=>u});var n=r(124),o=r(8534),i=(r(1539),r(8783),r(3948),r(7327),r(8898)),a=r(9696);const c={name:"Gallery",
/* fs_premium_only */
components:{ImageEditor:function(){return window.WPIDE.premium?r.e(827).then(r.bind(r,6469)):null}},
/* /fs_premium_only */
props:["item","itemSelected","removeItem"],data:function(){return{downloading:!1,editMode:!1,currentItem:"",images:[]}},watch:{item:function(t){this.setCurrentItem(t)}},created:function(){this.loading(),this.appDom.classList.add("gallery-active")},destroyed:function(){this.appDom.classList.remove("gallery-active")},mounted:function(){this.setCurrentItem(this.item),this.idle()},methods:{setCurrentItem:function(t){var e=this,r=this.currentItem.dir;this.currentItem=t,this.downloading=!0,i.Z.downloadItem({path:this.currentItem.path}).catch((function(){e.$emit("noFileFound",e.currentItem)})).finally((function(){e.downloading=!1})),this.currentItem.dir!==r&&this.setImages()},isCurrentItem:function(t){return this.currentItem.path===t.path},enableEditMode:function(){var t=this,e=!(arguments.length>0&&void 0!==arguments[0])||arguments[0];if(!this.premium)return this.showModalDialog((0,a.__)("Premium Version Required","wpide"),(0,a.__)("It looks like you’re trying to access a feature that requires the Premium Version.","wpide"),(0,a.__)("Unlock Access","wpide"),(function(){location.href=t.upgradeUrl}),(0,a.__)("More info","wpide"),(function(){location.href="https://wpide.com"}));
/* fs_premium_only */this.editMode=e},setImages:function(){var t=this;return(0,o.Z)((0,n.Z)().mark((function e(){var r;return(0,n.Z)().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,i.Z.getDir({dir:t.currentItem.dir});case 2:r=e.sent,t.images=r.files.filter((function(e){return t.isImage(e)}));case 4:case"end":return e.stop()}}),e)})))()},onDeleted:function(t){var e=this;return(0,o.Z)((0,n.Z)().mark((function r(){return(0,n.Z)().wrap((function(r){for(;;)switch(r.prev=r.next){case 0:return r.next=2,e.setImages();case 2:e.enableEditMode(!1),e.$emit("deleted",t);case 4:case"end":return r.stop()}}),r)})))()},onReverted:function(t){var e=this;return(0,o.Z)((0,n.Z)().mark((function r(){return(0,n.Z)().wrap((function(r){for(;;)switch(r.prev=r.next){case 0:return r.next=2,e.setImages();case 2:e.$emit("reverted",t);case 3:case"end":return r.stop()}}),r)})))()},onUpdated:function(t){var e=this;return(0,o.Z)((0,n.Z)().mark((function r(){return(0,n.Z)().wrap((function(r){for(;;)switch(r.prev=r.next){case 0:return r.next=2,e.setImages();case 2:e.$emit("updated",t);case 3:case"end":return r.stop()}}),r)})))()}}};const u=(0,r(1001).Z)(c,(function(){var t=this,e=t._self._c;return e("div",[e("div",{staticClass:"gallery d-flex",class:{"edit-mode":t.editMode}},[e("div",{staticClass:"gallery-main"},[t.premium&&t.editMode?e("ImageEditor",{attrs:{item:t.currentItem,"enable-edit-mode":t.enableEditMode,"remove-item":t.removeItem},on:{deleted:t.onDeleted,reverted:t.onReverted,updated:t.onUpdated}}):t._e(),t.editMode?t._e():e("div",{staticClass:"gallery-image",style:"background-image: url("+t.getDownloadLink(t.currentItem,!0)+")"},[e("div",{staticClass:"wpide-editor-actions"},[t.downloading?e("b-spinner",{attrs:{variant:"primary",label:"Spinning"}}):e("button",{staticClass:"btn btn-primary",attrs:{type:"button"},domProps:{textContent:t._s(t.__("Edit image","wpide"))},on:{click:t.enableEditMode}})],1)])],1),!t.editMode&&t.images.length?e("div",{staticClass:"gallery-sidebar"},[e("ul",t._l(t.images,(function(r,n){return e("li",{key:n},[e("a",{class:{active:t.isCurrentItem(r)},attrs:{href:"#"},on:{click:function(e){return e.preventDefault(),t.itemSelected(r)}}},[e("img",{directives:[{name:"lazy",rawName:"v-lazy",value:t.getDownloadLink(r),expression:"getDownloadLink(image)"}]})])])})),0)]):t._e()])])}),[],!1,null,"4bb758b4",null).exports},1060:(t,e,r)=>{var n=r(1702),o=Error,i=n("".replace),a=String(o("zxcasd").stack),c=/\n\s*at [^:]*:[^\n]*/,u=c.test(a);t.exports=function(t,e){if(u&&"string"==typeof t&&!o.prepareStackTrace)for(;e--;)t=i(t,c,"");return t}},2914:(t,e,r)=>{var n=r(7293),o=r(9114);t.exports=!n((function(){var t=Error("a");return!("stack"in t)||(Object.defineProperty(t,"stack",o(1,7)),7!==t.stack)}))},7762:(t,e,r)=>{"use strict";var n=r(9781),o=r(7293),i=r(9670),a=r(30),c=r(6277),u=Error.prototype.toString,s=o((function(){if(n){var t=a(Object.defineProperty({},"name",{get:function(){return this===t}}));if("true"!==u.call(t))return!0}return"2: 1"!==u.call({message:1,name:2})||"Error"!==u.call({})}));t.exports=s?function(){var t=i(this),e=c(t.name,"Error"),r=c(t.message);return e?r?e+": "+r:e:r}:u},9587:(t,e,r)=>{var n=r(614),o=r(111),i=r(7674);t.exports=function(t,e,r){var a,c;return i&&n(a=e.constructor)&&a!==r&&o(c=a.prototype)&&c!==r.prototype&&i(t,c),t}},8340:(t,e,r)=>{var n=r(111),o=r(8880);t.exports=function(t,e){n(e)&&"cause"in e&&o(t,"cause",e.cause)}},6277:(t,e,r)=>{var n=r(1340);t.exports=function(t,e){return void 0===t?arguments.length<2?"":e:n(t)}},2626:(t,e,r)=>{var n=r(3070).f;t.exports=function(t,e,r){r in t||n(t,r,{configurable:!0,get:function(){return e[r]},set:function(t){e[r]=t}})}},9191:(t,e,r)=>{"use strict";var n=r(5005),o=r(2597),i=r(8880),a=r(7976),c=r(7674),u=r(9920),s=r(2626),f=r(9587),l=r(6277),h=r(8340),d=r(1060),p=r(2914),v=r(9781),m=r(1913);t.exports=function(t,e,r,g){var y="stackTraceLimit",w=g?2:1,b=t.split("."),E=b[b.length-1],x=n.apply(null,b);if(x){var k=x.prototype;if(!m&&o(k,"cause")&&delete k.cause,!r)return x;var L=n("Error"),I=e((function(t,e){var r=l(g?e:t,void 0),n=g?new x(t):new x;return void 0!==r&&i(n,"message",r),p&&i(n,"stack",d(n.stack,2)),this&&a(k,this)&&f(n,this,I),arguments.length>w&&h(n,arguments[w]),n}));if(I.prototype=k,"Error"!==E?c?c(I,L):u(I,L,{name:!0}):v&&y in x&&(s(I,x,y),s(I,x,"prepareStackTrace")),u(I,x),!m)try{k.name!==E&&i(k,"name",E),k.constructor=I}catch(t){}return I}}},5069:(t,e,r)=>{"use strict";var n=r(2109),o=r(1702),i=r(3157),a=o([].reverse),c=[1,2];n({target:"Array",proto:!0,forced:String(c)===String(c.reverse())},{reverse:function(){return i(this)&&(this.length=this.length),a(this)}})},1703:(t,e,r)=>{var n=r(2109),o=r(7854),i=r(2104),a=r(9191),c="WebAssembly",u=o.WebAssembly,s=7!==Error("e",{cause:7}).cause,f=function(t,e){var r={};r[t]=a(t,e,s),n({global:!0,constructor:!0,arity:1,forced:s},r)},l=function(t,e){if(u&&u[t]){var r={};r[t]=a("WebAssembly."+t,e,s),n({target:c,stat:!0,constructor:!0,arity:1,forced:s},r)}};f("Error",(function(t){return function(e){return i(t,this,arguments)}})),f("EvalError",(function(t){return function(e){return i(t,this,arguments)}})),f("RangeError",(function(t){return function(e){return i(t,this,arguments)}})),f("ReferenceError",(function(t){return function(e){return i(t,this,arguments)}})),f("SyntaxError",(function(t){return function(e){return i(t,this,arguments)}})),f("TypeError",(function(t){return function(e){return i(t,this,arguments)}})),f("URIError",(function(t){return function(e){return i(t,this,arguments)}})),l("CompileError",(function(t){return function(e){return i(t,this,arguments)}})),l("LinkError",(function(t){return function(e){return i(t,this,arguments)}})),l("RuntimeError",(function(t){return function(e){return i(t,this,arguments)}}))},6647:(t,e,r)=>{var n=r(8052),o=r(7762),i=Error.prototype;i.toString!==o&&n(i,"toString",o)},3706:(t,e,r)=>{var n=r(7854);r(8003)(n.JSON,"JSON",!0)},2703:(t,e,r)=>{r(8003)(Math,"Math",!0)},8011:(t,e,r)=>{r(2109)({target:"Object",stat:!0,sham:!r(9781)},{create:r(30)})},489:(t,e,r)=>{var n=r(2109),o=r(7293),i=r(7908),a=r(9518),c=r(8544);n({target:"Object",stat:!0,forced:o((function(){a(1)})),sham:!c},{getPrototypeOf:function(t){return a(i(t))}})},8304:(t,e,r)=>{r(2109)({target:"Object",stat:!0},{setPrototypeOf:r(7674)})},2443:(t,e,r)=>{r(6800)("asyncIterator")},3680:(t,e,r)=>{var n=r(5005),o=r(6800),i=r(8003);o("toStringTag"),i(n("Symbol"),"Symbol")},8534:(t,e,r)=>{"use strict";r.d(e,{Z:()=>o});r(1539);function n(t,e,r,n,o,i,a){try{var c=t[i](a),u=c.value}catch(t){return void r(t)}c.done?e(u):Promise.resolve(u).then(n,o)}function o(t){return function(){var e=this,r=arguments;return new Promise((function(o,i){var a=t.apply(e,r);function c(t){n(a,o,i,c,u,"next",t)}function u(t){n(a,o,i,c,u,"throw",t)}c(void 0)}))}}},124:(t,e,r)=>{"use strict";r.d(e,{Z:()=>o});r(2526),r(1817),r(1539),r(2165),r(8783),r(3948),r(2443),r(3680),r(3706),r(2703),r(9070),r(8011),r(1703),r(6647),r(489),r(9554),r(4747),r(8309),r(8304),r(5069),r(7042);var n=r(3336);function o(){o=function(){return t};var t={},e=Object.prototype,r=e.hasOwnProperty,i="function"==typeof Symbol?Symbol:{},a=i.iterator||"@@iterator",c=i.asyncIterator||"@@asyncIterator",u=i.toStringTag||"@@toStringTag";function s(t,e,r){return Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}),t[e]}try{s({},"")}catch(t){s=function(t,e,r){return t[e]=r}}function f(t,e,r,n){var o=e&&e.prototype instanceof d?e:d,i=Object.create(o.prototype),a=new I(n||[]);return i._invoke=function(t,e,r){var n="suspendedStart";return function(o,i){if("executing"===n)throw new Error("Generator is already running");if("completed"===n){if("throw"===o)throw i;return S()}for(r.method=o,r.arg=i;;){var a=r.delegate;if(a){var c=x(a,r);if(c){if(c===h)continue;return c}}if("next"===r.method)r.sent=r._sent=r.arg;else if("throw"===r.method){if("suspendedStart"===n)throw n="completed",r.arg;r.dispatchException(r.arg)}else"return"===r.method&&r.abrupt("return",r.arg);n="executing";var u=l(t,e,r);if("normal"===u.type){if(n=r.done?"completed":"suspendedYield",u.arg===h)continue;return{value:u.arg,done:r.done}}"throw"===u.type&&(n="completed",r.method="throw",r.arg=u.arg)}}}(t,r,a),i}function l(t,e,r){try{return{type:"normal",arg:t.call(e,r)}}catch(t){return{type:"throw",arg:t}}}t.wrap=f;var h={};function d(){}function p(){}function v(){}var m={};s(m,a,(function(){return this}));var g=Object.getPrototypeOf,y=g&&g(g(_([])));y&&y!==e&&r.call(y,a)&&(m=y);var w=v.prototype=d.prototype=Object.create(m);function b(t){["next","throw","return"].forEach((function(e){s(t,e,(function(t){return this._invoke(e,t)}))}))}function E(t,e){function o(i,a,c,u){var s=l(t[i],t,a);if("throw"!==s.type){var f=s.arg,h=f.value;return h&&"object"==(0,n.Z)(h)&&r.call(h,"__await")?e.resolve(h.__await).then((function(t){o("next",t,c,u)}),(function(t){o("throw",t,c,u)})):e.resolve(h).then((function(t){f.value=t,c(f)}),(function(t){return o("throw",t,c,u)}))}u(s.arg)}var i;this._invoke=function(t,r){function n(){return new e((function(e,n){o(t,r,e,n)}))}return i=i?i.then(n,n):n()}}function x(t,e){var r=t.iterator[e.method];if(void 0===r){if(e.delegate=null,"throw"===e.method){if(t.iterator.return&&(e.method="return",e.arg=void 0,x(t,e),"throw"===e.method))return h;e.method="throw",e.arg=new TypeError("The iterator does not provide a 'throw' method")}return h}var n=l(r,t.iterator,e.arg);if("throw"===n.type)return e.method="throw",e.arg=n.arg,e.delegate=null,h;var o=n.arg;return o?o.done?(e[t.resultName]=o.value,e.next=t.nextLoc,"return"!==e.method&&(e.method="next",e.arg=void 0),e.delegate=null,h):o:(e.method="throw",e.arg=new TypeError("iterator result is not an object"),e.delegate=null,h)}function k(t){var e={tryLoc:t[0]};1 in t&&(e.catchLoc=t[1]),2 in t&&(e.finallyLoc=t[2],e.afterLoc=t[3]),this.tryEntries.push(e)}function L(t){var e=t.completion||{};e.type="normal",delete e.arg,t.completion=e}function I(t){this.tryEntries=[{tryLoc:"root"}],t.forEach(k,this),this.reset(!0)}function _(t){if(t){var e=t[a];if(e)return e.call(t);if("function"==typeof t.next)return t;if(!isNaN(t.length)){var n=-1,o=function e(){for(;++n<t.length;)if(r.call(t,n))return e.value=t[n],e.done=!1,e;return e.value=void 0,e.done=!0,e};return o.next=o}}return{next:S}}function S(){return{value:void 0,done:!0}}return p.prototype=v,s(w,"constructor",v),s(v,"constructor",p),p.displayName=s(v,u,"GeneratorFunction"),t.isGeneratorFunction=function(t){var e="function"==typeof t&&t.constructor;return!!e&&(e===p||"GeneratorFunction"===(e.displayName||e.name))},t.mark=function(t){return Object.setPrototypeOf?Object.setPrototypeOf(t,v):(t.__proto__=v,s(t,u,"GeneratorFunction")),t.prototype=Object.create(w),t},t.awrap=function(t){return{__await:t}},b(E.prototype),s(E.prototype,c,(function(){return this})),t.AsyncIterator=E,t.async=function(e,r,n,o,i){void 0===i&&(i=Promise);var a=new E(f(e,r,n,o),i);return t.isGeneratorFunction(r)?a:a.next().then((function(t){return t.done?t.value:a.next()}))},b(w),s(w,u,"Generator"),s(w,a,(function(){return this})),s(w,"toString",(function(){return"[object Generator]"})),t.keys=function(t){var e=[];for(var r in t)e.push(r);return e.reverse(),function r(){for(;e.length;){var n=e.pop();if(n in t)return r.value=n,r.done=!1,r}return r.done=!0,r}},t.values=_,I.prototype={constructor:I,reset:function(t){if(this.prev=0,this.next=0,this.sent=this._sent=void 0,this.done=!1,this.delegate=null,this.method="next",this.arg=void 0,this.tryEntries.forEach(L),!t)for(var e in this)"t"===e.charAt(0)&&r.call(this,e)&&!isNaN(+e.slice(1))&&(this[e]=void 0)},stop:function(){this.done=!0;var t=this.tryEntries[0].completion;if("throw"===t.type)throw t.arg;return this.rval},dispatchException:function(t){if(this.done)throw t;var e=this;function n(r,n){return a.type="throw",a.arg=t,e.next=r,n&&(e.method="next",e.arg=void 0),!!n}for(var o=this.tryEntries.length-1;o>=0;--o){var i=this.tryEntries[o],a=i.completion;if("root"===i.tryLoc)return n("end");if(i.tryLoc<=this.prev){var c=r.call(i,"catchLoc"),u=r.call(i,"finallyLoc");if(c&&u){if(this.prev<i.catchLoc)return n(i.catchLoc,!0);if(this.prev<i.finallyLoc)return n(i.finallyLoc)}else if(c){if(this.prev<i.catchLoc)return n(i.catchLoc,!0)}else{if(!u)throw new Error("try statement without catch or finally");if(this.prev<i.finallyLoc)return n(i.finallyLoc)}}}},abrupt:function(t,e){for(var n=this.tryEntries.length-1;n>=0;--n){var o=this.tryEntries[n];if(o.tryLoc<=this.prev&&r.call(o,"finallyLoc")&&this.prev<o.finallyLoc){var i=o;break}}i&&("break"===t||"continue"===t)&&i.tryLoc<=e&&e<=i.finallyLoc&&(i=null);var a=i?i.completion:{};return a.type=t,a.arg=e,i?(this.method="next",this.next=i.finallyLoc,h):this.complete(a)},complete:function(t,e){if("throw"===t.type)throw t.arg;return"break"===t.type||"continue"===t.type?this.next=t.arg:"return"===t.type?(this.rval=this.arg=t.arg,this.method="return",this.next="end"):"normal"===t.type&&e&&(this.next=e),h},finish:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.finallyLoc===t)return this.complete(r.completion,r.afterLoc),L(r),h}},catch:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.tryLoc===t){var n=r.completion;if("throw"===n.type){var o=n.arg;L(r)}return o}}throw new Error("illegal catch attempt")},delegateYield:function(t,e,r){return this.delegate={iterator:_(t),resultName:e,nextLoc:r},"next"===this.method&&(this.arg=void 0),h}},t}}}]);