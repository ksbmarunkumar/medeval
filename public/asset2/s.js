(function(w,d){zaraz.debug=(cM="")=>{document.cookie=`zarazDebug=${cM}; path=/`;location.reload()};window.zaraz._al=function(bT,bU,bV){w.zaraz.listeners.push({item:bT,type:bU,callback:bV});bT.addEventListener(bU,bV)};zaraz.preview=(bW="")=>{document.cookie=`zarazPreview=${bW}; path=/`;location.reload()};zaraz.i=function(cv){const cw=d.createElement("div");cw.innerHTML=unescape(cv);const cx=cw.querySelectorAll("script");for(let cy=0;cy<cx.length;cy++){const cz=d.createElement("script");cx[cy].innerHTML&&(cz.innerHTML=cx[cy].innerHTML);for(const cA of cx[cy].attributes)cz.setAttribute(cA.name,cA.value);d.head.appendChild(cz);cx[cy].remove()}d.body.appendChild(cw)};zaraz.f=async function(cB,cC){const cD={credentials:"include",keepalive:!0,mode:"no-cors"};if(cC){cD.method="POST";cD.body=new URLSearchParams(cC);cD.headers={"Content-Type":"application/x-www-form-urlencoded"}}return await fetch(cB,cD)};!function(cN,cO,cP,cQ,cR,cS){function cT(cV,cW){cS?cQ(cV,cW||32):cR.push(cV,cW)}function cU(cX,cY,cZ,c_){return cY&&cO.getElementById(cY)||(c_=cO.createElement(cX||"SCRIPT"),cY&&(c_.id=cY),cZ&&(c_.onload=cZ),cO.head.appendChild(c_)),c_||{}}cS=/p/.test(cO.readyState),cN.addEventListener("on"+cP in cN?cP:"load",(function(){for(cS=1;cR[0];)cT(cR.shift(),cR.shift())})),cT._=cU,cN.defer=cT,cN.deferscript=function(da,db,dc,dd){cT((function(){cU("",db,dd).src=da}),dc)}}(this,d,"pageshow",setTimeout,[]);defer((function(){for(;zaraz.deferred.length;)zaraz.deferred.pop()();Object.defineProperty(zaraz.deferred,"push",{configurable:!0,enumerable:!1,writable:!0,value:function(...de){let df=Array.prototype.push.apply(this,de);for(;zaraz.deferred.length;)zaraz.deferred.pop()();return df}})}),5500);addEventListener("visibilitychange",(function(){for(;zaraz.deferred.length;)zaraz.deferred.pop()()}));window.zaraz._p=async a=>new Promise((b=>{if(a){a.e&&a.e.forEach((c=>{try{new Function(c)()}catch(d){console.error(`Error executing script: ${c}\n`,d)}}));Promise.allSettled((a.f||[]).map((e=>fetch(e[0],e[1]))))}b()}));zaraz.pageVariables={};zaraz.__zcl={};zaraz.track=async function(b_,ca,cb){return new Promise(((cc,cd)=>{const ce={name:b_,data:{}};for(const cf of[localStorage,sessionStorage])Object.keys(cf||{}).filter((ch=>ch.startsWith("_zaraz_"))).forEach((cg=>{try{ce.data[cg.slice(7)]=JSON.parse(cf.getItem(cg))}catch{ce.data[cg.slice(7)]=cf.getItem(cg)}}));Object.keys(zaraz.pageVariables).forEach((ci=>ce.data[ci]=JSON.parse(zaraz.pageVariables[ci])));Object.keys(zaraz.__zcl).forEach((cj=>ce.data[`__zcl_${cj}`]=zaraz.__zcl[cj]));ce.data.mcListeners=zaraz.mcListeners;
//
ce.data={...ce.data,...ca};ce.zarazData=zarazData;fetch("/cdn-cgi/zaraz/t",{credentials:"include",keepalive:!0,method:"POST",headers:{"Content-Type":"application/json"},body:JSON.stringify(ce)}).catch((()=>fetch("/cdn-cgi/zaraz/t",{credentials:"include",method:"POST",headers:{"Content-Type":"application/json"},body:JSON.stringify(ce)}).catch((()=>{console.warn("2nd fetch to Cloudflare Zaraz failed")})))).then((function(cl){zarazData._let=(new Date).getTime();cl.ok||cd();return 204!==cl.status&&cl.json()})).then((async ck=>{await zaraz._p(ck);"function"==typeof cb&&cb()})).finally((()=>cc()))}))};zaraz.set=function(cm,cn,co){try{cn=JSON.stringify(cn)}catch(cp){return}prefixedKey="_zaraz_"+cm;sessionStorage&&sessionStorage.removeItem(prefixedKey);localStorage&&localStorage.removeItem(prefixedKey);delete zaraz.pageVariables[cm];if(void 0!==cn){co&&"session"==co.scope?sessionStorage&&sessionStorage.setItem(prefixedKey,cn):co&&"page"==co.scope?zaraz.pageVariables[cm]=cn:localStorage&&localStorage.setItem(prefixedKey,cn);zaraz.__watchVar={key:cm,value:cn}}};for(const{m:cq,a:cr}of zarazData.q.filter((({m:cs})=>["debug","set"].includes(cs))))zaraz[cq](...cr);for(const{m:ct,a:cu}of zaraz.q)zaraz[ct](...cu);delete zaraz.q;delete zarazData.q;zaraz.fulfilTrigger=function(Y,Z,_,ba){zaraz.__zarazTriggerMap||(zaraz.__zarazTriggerMap={});zaraz.__zarazTriggerMap[Y]||(zaraz.__zarazTriggerMap[Y]="");zaraz.__zarazTriggerMap[Y]+="*"+Z+"*";zaraz.track("__zarazEmpty",{..._,__zarazClientTriggers:zaraz.__zarazTriggerMap[Y]},ba)};window.dataLayer=w.dataLayer||[];zaraz._processDataLayer=cF=>{for(const cG of Object.entries(cF))zaraz.set(cG[0],cG[1],{scope:"page"});if(cF.event){if(zarazData.dataLayerIgnore&&zarazData.dataLayerIgnore.includes(cF.event))return;let cH={};for(let cI of dataLayer.slice(0,dataLayer.indexOf(cF)+1))cH={...cH,...cI};delete cH.event;cF.event.startsWith("gtm.")||zaraz.track(cF.event,cH)}};const cE=w.dataLayer.push;Object.defineProperty(w.dataLayer,"push",{configurable:!0,enumerable:!1,writable:!0,value:function(...cJ){let cK=cE.apply(this,cJ);zaraz._processDataLayer(cJ[0]);return cK}});dataLayer.forEach((cL=>zaraz._processDataLayer(cL)));zaraz._cts=()=>{zaraz._timeouts&&zaraz._timeouts.forEach((dD=>clearTimeout(dD)));zaraz._timeouts=[]};zaraz._rl=function(){w.zaraz.listeners&&w.zaraz.listeners.forEach((dE=>dE.item.removeEventListener(dE.type,dE.callback)));window.zaraz.listeners=[]};history.pushState=function(){try{zaraz._rl();zaraz._cts&&zaraz._cts()}finally{History.prototype.pushState.apply(history,arguments);setTimeout((()=>{zarazData.l=d.location.href;zarazData.t=d.title;zaraz.pageVariables={};zaraz.mcListeners={};zaraz.track("__zarazSPA")}),100)}};history.replaceState=function(){try{zaraz._rl();zaraz._cts&&zaraz._cts()}finally{History.prototype.replaceState.apply(history,arguments);setTimeout((()=>{zarazData.l=d.location.href;zarazData.t=d.title;zaraz.pageVariables={};zaraz.track("__zarazSPA")}),100)}};zaraz._c=fx=>{const{event:fy,...fz}=fx;zaraz.track(fy,{...fz,__zarazClientEvent:!0})};zaraz._syncedAttributes=["altKey","clientX","clientY","pageX","pageY","button"];zaraz.__zcl.track=!0;d.addEventListener("visibilitychange",(fA=>{zaraz._c({event:"visibilityChange",visibilityChange:[{state:d.visibilityState,timestamp:(new Date).getTime()}]},1)}));zaraz.__zcl.visibilityChange=!0;zaraz.mcListeners={"google-analytics_v4_20ac":["visibilityChange"]};zaraz._p({"e":["(function(w,d){w.zarazData.executed.push(\"Pageview\");})(window,document)"],"f":[["https://stats.g.doubleclick.net/g/collect?t=dc&aip=1&_r=3&v=1&_v=j86&tid=G-SEKJ4E9T4H&cid=40704228-f459-4265-9c58-6e1f847e666e&_u=KGDAAEADQAAAAC%7E&z=1056339212",{}]]})})(window,document);