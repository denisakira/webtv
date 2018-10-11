<template>
  <div class="container">
    <div>

      <div class="accent-1">
        Mapa
      </div>

      <label class="label--location">
        <gmap-autocomplete 
          class="form--location form-control" 
          @place_changed="setPlace"
        ></gmap-autocomplete>
        <button 
          class="btn--location btn btn-primary"
          @click="addMarker"
          type="button"
        >Adicionar</button>
      </label>

    </div>

    <br>

    <gmap-map 
      :center="center" 
      :zoom="12" 
      style="width:100%;  height: 400px;"
    >  
      <gmap-marker 
        v-for="(m, index) in markers" 
        :key="index" 
        :position="m.position" 
        :draggable="true" 
        @click="center=m.position"
        @drag="markerChange"
      ></gmap-marker>
    </gmap-map>
  
  </div>
</template>

<script>
export default {
  name: "GoogleMap",
  data() {
    return {
      // default to Montreal to keep it simple
      // change this to whatever makes sense
      center: {
        lat: 45.508,
        lng: -73.587
      },
      markers: [],
      places: [],
      currentPlace: null,
      coordinates: null
    };
  },
  mounted() {
    this.geolocate();
  },
  methods: {
    // receives a place object via the autocomplete component
    setPlace(place) {
      this.currentPlace = place;
    },
    addMarker() {
      if (this.currentPlace) {
        const marker = {
          lat: this.currentPlace.geometry.location.lat(),
          lng: this.currentPlace.geometry.location.lng()
        };
        this.markers.push({
          position: marker
        });
        this.places.push(this.currentPlace);
        this.center = marker;
        this.currentPlace = null;
      }
    },
    geolocate() {
      navigator.geolocation.getCurrentPosition(position => {
        this.center = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
      });
    },
    markerChange(location) {
      this.coordinates = {
        lat: location.latLng.lat(),
        lng: location.latLng.lng()
      };
      // this.markers.push({
      //   position: this.coordinates
      // });
    }
  }
};
</script>

<style scoped <style lang="scss" scoped>
.container {
  padding: 0.5em;

  .label--location {
    display: flex;
    flex-direction: column;
  }

  .form--location {
    flex: 6;
  }

  .btn--location {
    flex: 1;
  }
}
</style>