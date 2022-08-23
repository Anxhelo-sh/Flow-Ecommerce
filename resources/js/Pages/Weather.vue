<template>
<div id="weather-main" :class="typeof weather.main != 'undefined' && weather.main.temp > 16 ? 'warm' : ''">
  <main class="flex flex-wrap flex-column" >
    <div class="search-box">
      <input
          type="text"
          name="" id=""
          class="search-bar"
          placeholder="Search..."
          v-model="query"
          @keydown="fetchWeather"
      />
    </div>
    <div class="weather-wrap" v-if=" typeof weather.main != 'undefined'">
      <div class="location-box flex gap-6">
        <div>
          <div class="location">
            {{ weather.name }} , {{ weather.sys.country }}
          </div>
          <div class="date">{{ dateBuilder() }}</div>
        </div>
        <div>
          <div class="weather-box">
            <div class="temp">
              {{ Math.round(weather.main.temp)}}°c
            </div>

          </div>
        </div>



      </div>
    </div>
  </main>
</div>
</template>

<script>
export default {
  name: "Weather",
  data () {
    return{
      api_key :`883040930823dd1edc962816a63fda34` ,
      url_base : "https://api.openweathermap.org/data/2.5/" ,
      query : '' ,
      defaultQuery : 'Albania' ,
      weather : {} ,

    } ;
  },
  mounted(){
    fetch(`${this.url_base}weather?q=${this.defaultQuery}&units=metric&APPID=${this.api_key}`)
        .then(res => {
          return res.json() ;
        }).then(this.setResult) ;
  } ,
  methods : {
    fetchWeather(){
      if(event.key == "Enter"){
        fetch(`${this.url_base}weather?q=${this.query}&units=metric&APPID=${this.api_key}`)
            .then(res => {
              return res.json() ;
            }).then(this.setResult) ;
      }
    },
    setResult (result){
      this.weather = result ;
    },
    dateBuilder () {
      let d = new Date();
      let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
      let days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
      let day = days[d.getDay()];
      let date = d.getDate();
      let month = months[d.getMonth()];
      let year = d.getFullYear();
      return `${day} ${date} ${month} ${year}`;
    }

  } ,
}
</script>

<style scoped>
* {
  margin : 0 ;
  padding: 0;
  box-sizing: border-box;
}
body{
  font-family: 'montserrat' , Sans-Serif;

}
#weather-main {
  background-image: url("../assets/cold-bg.jpg") ;
  background-size: cover;
  background-position: bottom;
  transition: 0.4s;
  width: 500px;
  border-radius: 36px;



}
#weather-main.warm {
  background-image: url('../assets/warm-bg.jpg');



}
main {
  height: auto;
  padding: 25px;
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.75));
  border-radius: 36px;

}
.search-box {
  width: 100%;
  margin-bottom: 30px;
}

.search-box .search-bar {
  display: block;
  width: 100%;
  padding: 15px;

  color: #FFF;
  font-size: 25px;
  appearance: none;
  border:none;
  outline: none;
  background: none;
  box-shadow: 0 0 8px rgba(0, 0, 0, 0.25);
  background-color: rgba(252, 250, 250, 0.25);
  border-radius: 0 16px 0 16px;
  transition: 0.4s;
}
.seach-box .search-bar:focus {
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.25);
  background-color: rgba(255, 255, 255, 0.75);
  border-radius: 16px 0 16px 0;
}
.location-box .location {
  color: #FFF;
  margin-top: 15px;
  font-size: 30px;
  font-weight: 500;
  text-align: center;
  text-shadow: 1px 3px rgba(0, 0, 0, 0.25);
}
.location-box .date {
  color: #FFF;
  font-size: 20px;
  font-weight: 300;
  font-style: italic;
  text-align: center;
}
.weather-box {
  text-align: center;
  margin-left: 55px;
}
.weather-box .temp {
  display: inline-block;
  padding: 8px 22px;
  color: #FFF;
  font-size: 80px;
  font-weight: 900;
  text-shadow: 3px 6px rgba(0, 0, 0, 0.25);
  background-color:rgba(255, 255, 255, 0.25);
  border-radius: 16px;
  box-shadow: 3px 6px rgba(0, 0, 0, 0.25);
}
.weather-box .weather {
  color: #FFF;
  font-size: 48px;
  font-weight: 700;
  font-style: italic;
  text-shadow: 3px 6px rgba(0, 0, 0, 0.25);
}
</style>