!function(e,t){function n(e,t){function n(){}n[a]=this[a];var i=this,s=new n,o=f(e),u=o?e:this,l=o?{}:e,c=function(){this.initialize?this.initialize.apply(this,arguments):(t||o&&i.apply(this,arguments),u.apply(this,arguments))};c.methods=function(e){r(s,e,i),c[a]=s;return this},c.methods.call(c,l).prototype.constructor=c,c.extend=arguments.callee,c[a].implement=c.statics=function(e,t){e=typeof e=="string"?function(){var n={};n[e]=t;return n}():e,r(this,e,i);return this};return c}function r(e,t,n){for(var r in t)t.hasOwnProperty(r)&&(e[r]=f(t[r])&&f(n[a][r])&&o.test(t[r])?i(r,t[r],n):t[r])}function i(e,t,n){return function(){var r=this.supr;this.supr=n[a][e];var i=t.apply(this,arguments);this.supr=r;return i}}function s(e){return n.call(f(e)?e:u,e,1)}var o=/xyz/.test(function(){xyz})?/\bsupr\b/:/.*/,u=function(){},a="prototype",f=function(e){return typeof e===t};if(typeof module!="undefined"&&module.exports)module.exports=s;else{var l=e.klass;s.noConflict=function(){e.klass=l;return this},e.klass=s}}(this,"function");