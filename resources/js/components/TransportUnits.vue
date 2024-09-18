<template>
  <div class="container">
    <div class="tabs">
      <button @click="filterType('all')" :class="{ active: filter === 'all' }">All</button>
      <button @click="filterType('truck')" :class="{ active: filter === 'truck' }">Trucks</button>
      <button @click="filterType('trailer')" :class="{ active: filter === 'trailer' }">Trailers</button>
    </div>
    <input type="text" v-model="search" placeholder="Search..." @input="fetchUnits" class="search-input" />
    <div v-for="unit in units.data" :key="unit.id" class="unit-card">
      <h3>{{ unit.name }} ({{ unit.type }})</h3>
      <button @click="removeUnit(unit.id)" class="remove-button">x</button>
    </div>
    <div class="pagination">
      <button @click="fetchUnits(units.prev_page_url)" :disabled="!units.prev_page_url">Previous</button>
      <button @click="fetchUnits(units.next_page_url)" :disabled="!units.next_page_url">Next</button>
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
      units: {
        data: [],            // Stores unit data
        prev_page_url: null, // URL for the previous page
        next_page_url: null  // URL for the next page
      },
      search: '',
      filter: 'all',
      newUnit: {
        name: '',
        type: 'truck',
      }
    };
  },
  methods: {
    fetchUnits(url = '/api/transport-units') {
      axios.get(url, {
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
      this.fetchUnits(); // Fetch data with updated filter
    },
    createUnit() {
      axios.post('/api/transport-units', this.newUnit)
        .then(response => {
          this.units.data.push(response.data);
          this.newUnit.name = '';
          this.newUnit.type = 'truck'; // Reset to default
        }).catch(error => {
          console.error('There was an error creating the unit!', error);
        });
    },
    removeUnit(id) {
      axios.delete(`/api/transport-units/${id}`)
        .then(() => {
          this.units.data = this.units.data.filter(unit => unit.id !== id);
        }).catch(error => {
          console.error('There was an error removing the unit!', error);
        });
    }
  },
  mounted() {
    this.fetchUnits();
  }
};
</script>
