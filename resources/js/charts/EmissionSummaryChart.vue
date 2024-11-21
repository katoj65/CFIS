<template>
<D3BarChart
:config="chart_config"
:datum="chart_data"
:title="chart_title"
:source="chart_source"
></D3BarChart>
</template>
<script>import { D3BarChart } from 'vue-d3-charts';

export default {
  components: {
    D3BarChart,
  },
  data() {
    return {
      chart_data: [
        //...
        {lorem: 1648, ipsum: 9613, dolor: 1390, sit: 9130, year: '2024'},
        {lorem: 2479, ipsum: 6315, dolor: 1560, sit: 6150, year: '2025'},
        {lorem: 3200, ipsum: 12541, dolor: 5421, sit: 2541, year: '2026'},
      ],
      chart_config: {
        key: 'year',
        values: ['lorem', 'ipsum', 'dolor', 'sit'],
        axis: {
          yTicks: 4
        },
        color: {
          keys: {
            lorem: '#F98B3B',
            ipsum: '#F26643',
            dolor: '#FF463D',
            sit: '#C92C39',
          },
        },
      },
    };
  },
};

</script>