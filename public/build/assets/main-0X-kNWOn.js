var M=Object.defineProperty;var $=s=>{throw TypeError(s)};var C=(s,t,e)=>t in s?M(s,t,{enumerable:!0,configurable:!0,writable:!0,value:e}):s[t]=e;var _=(s,t,e)=>C(s,typeof t!="symbol"?t+"":t,e),W=(s,t,e)=>t.has(s)||$("Cannot "+e);var n=(s,t,e)=>(W(s,t,"read from private field"),e?e.call(s):t.get(s)),h=(s,t,e)=>t.has(s)?$("Cannot add the same private member more than once"):t instanceof WeakSet?t.add(s):t.set(s,e),g=(s,t,e,o)=>(W(s,t,"write to private field"),o?o.call(s,e):t.set(s,e),e);class E{constructor(t,e,o){_(this,"date",new Date);_(this,"id",(Date.now()+"").slice(-10));this.coords=t,this.distance=e,this.duration=o}_setDescription(){const t=["January","February","March","April","May","June","July","August","September","October","November","December"];this.description=`${this.type[0].toUpperCase()}${this.type.slice(1)} on ${t[this.date.getMonth()]} ${this.date.getDate()}`}}class F extends E{constructor(e,o,a,i){super(e,o,a);_(this,"type","running");this.cadence=i,this.pace=this.calcPace(),this._setDescription()}calcPace(){return this.duration/this.distance}}class q extends E{constructor(e,o,a,i){super(e,o,a);_(this,"type","cycling");this.elevationGain=i,this.speed=this.calcSpeed(),this._setDescription()}calcSpeed(){return this.distance/(this.duration/60)}}const p=document.querySelector(".form"),T=document.querySelector(".workouts"),P=document.querySelector(".form__input--type"),y=document.querySelector(".form__input--distance"),D=document.querySelector(".form__input--duration"),w=document.querySelector(".form__input--cadence"),f=document.querySelector(".form__input--elevation");var l,m,c,v;class x{constructor(){h(this,l);h(this,m);h(this,c,[]);h(this,v,13);this._getPosition(),this._getLocalStorage(),p.addEventListener("submit",this._newWorkout.bind(this)),P.addEventListener("change",this.toggleElevationField),T.addEventListener("click",this._moveToPopup.bind(this))}_getPosition(){navigator.geolocation&&navigator.geolocation.getCurrentPosition(this._loadMap.bind(this),function(){alert("Could not get your position")})}_loadMap(t){const{latitude:e,longitude:o}=t.coords,a=[e,o];g(this,l,L.map("map").setView(a,n(this,v))),L.tileLayer("https://tile.openstreetmap.fr/hot/{z}/{x}/{y}.png",{attribution:'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'}).addTo(n(this,l)),n(this,l).on("click",this._showform.bind(this)),n(this,c).forEach(i=>{this._renderWorkoutMarker(i)})}_showform(t){g(this,m,t),p.classList.remove("hidden"),y.focus()}_hideForm(){y.value=D.value=w.value=f.value="",p.style.display="none",p.classList.add("hidden"),setTimeout(()=>p.style.display="grid",1e3)}toggleElevationField(){f.closest(".form__row").classList.toggle("form__row--hidden"),w.closest(".form__row").classList.toggle("form__row--hidden")}_newWorkout(t){const e=(...r)=>r.every(k=>Number.isFinite(k)),o=(...r)=>r.every(k=>k>0);t.preventDefault();const a=P.value,i=+y.value,u=+D.value,{lat:S,lng:b}=n(this,m).latlng;let d;if(a==="running"){const r=+w.value;if(!e(i,u,r)||!o(i,u,r))return alert("Inputs have to be positive numbers!");d=new F([S,b],i,u,r)}if(a==="cycling"){const r=+f.value;if(!e(i,u,r)||!o(i,u))return alert("Inputs have to be positive numbers!");d=new q([S,b],i,u,r)}n(this,c).push(d),this._renderWorkoutMarker(d),this._renderWorkout(d),this._hideForm(),this._setLocalStorage()}_renderWorkoutMarker(t){L.marker(t.coords).addTo(n(this,l)).bindPopup(L.popup({maxWidth:250,minWidth:100,autoClose:!1,closeOnClick:!1,className:`${t.type}-popup`})).setPopupContent(`${t.type==="running"?"🏃‍♂️":"🚴‍♀️"} ${t.description}`).openPopup()}_renderWorkout(t){let e=`
            <li class="workout workout--${t.type}" data-id="${t.id}">
                <h2 class="workout__title">${t.description}</h2>
                <div class="workout__details">
                    <span class="workout__icon">${t.type==="running"?"🏃‍♂️":"🚴‍♀️"}</span>
                    <span class="workout__value">${t.distance}</span>
                    <span class="workout__unit">km</span>
                </div>
                <div class="workout__details">
                    <span class="workout__icon">⏱</span>
                    <span class="workout__value">${t.duration}</span>
                    <span class="workout__unit">min</span>
                </div>
            `;t.type==="running"&&(e+=`
                    <div class="workout__details">
                        <span class="workout__icon">⚡️</span>
                        <span class="workout__value">${t.pace.toFixed(1)}</span>
                        <span class="workout__unit">min/km</span>
                    </div>
                    <div class="workout__details">
                        <span class="workout__icon">🦶🏼</span>
                        <span class="workout__value">${t.cadence}</span>
                        <span class="workout__unit">spm</span>
                    </div>
                </li>
                `),t.type==="cycling"&&(e+=`
                    <div class="workout__details">
                        <span class="workout__icon">⚡️</span>
                        <span class="workout__value">${t.speed.toFixed(1)}</span>
                        <span class="workout__unit">km/h</span>
                    </div>
                    <div class="workout__details">
                        <span class="workout__icon">⛰</span>
                        <span class="workout__value">${t.elevationGain}</span>
                        <span class="workout__unit">m</span>
                    </div>
                </li>
            `),p.insertAdjacentHTML("afterend",e)}_moveToPopup(t){const e=t.target.closest(".workout");if(!e)return;const o=n(this,c).find(a=>a.id===e.dataset.id);n(this,l).setView(o.coords,n(this,v),{animate:!0,pan:{duration:1}})}_setLocalStorage(){localStorage.setItem("workouts",JSON.stringify(n(this,c)))}_getLocalStorage(){const t=JSON.parse(localStorage.getItem("workouts"));t&&(g(this,c,t),n(this,c).forEach(e=>{this._renderWorkout(e)}))}}l=new WeakMap,m=new WeakMap,c=new WeakMap,v=new WeakMap;new x;
