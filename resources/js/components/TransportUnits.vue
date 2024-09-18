<template>
  <div class="container">
    <div class="tabs">
      <button @click="filterType('all')" :class="{ active: filter === 'all' }">All</button>
      <button @click="filterType('truck')" :class="{ active: filter === 'truck' }">Trucks</button>
      <button @click="filterType('trailer')" :class="{ active: filter === 'trailer' }">Trailers</button>
    </div>
    <input type="text" v-model="search" placeholder="Search..." @input="fetchUnits" class="search-input" />
    <div v-for="unit in units" :key="unit.id" class="unit-card">
      <h3>{{ unit.name }} ({{ unit.type }})</h3>
    </div>
    <div class="create-unit">
      <input v-model="newUnit.name" placeholder="Name" class="input-field" />
      <select v-model="newUnit.type" class="select-field">
        <option value="truck">Truck</option>
        <option value="trailer">Trailer</option>
      </select>
      <button @click="createUnit" class="create-button">Create Unit</button>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      units: [],
      search: '',
      filter: 'all',
      newUnit: {
        name: '',
        type: 'truck',
      }
    };
  },
  methods: {
    fetchUnits() {
      axios.get('/api/transport-units', {
        params: {
          type: this.filter,
          search: this.search
        }
      }).then(response => {
        this.units = response.data;
      }).catch(error => {
        console.error('There was an error!', error);
      });
    },
    filterType(type) {
      this.filter = type;
      this.fetchUnits();
    },
    createUnit() {
      axios.post('/api/transport-units', this.newUnit)
        .then(response => {
          this.units.push(response.data);
          this.newUnit.name = '';
          this.newUnit.type = 'truck'; // Reset to default
        }).catch(error => {
          console.error('There was an error creating the unit!', error);
        });
    }
  },
  mounted() {
    this.fetchUnits();
  }
};
</script>
