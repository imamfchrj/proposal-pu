$(function() {
  'use strict';

   /**************** PIE CHART *******************/
   var piedata = [
      { label: "Butuh Justifikasi", data: [[1,30]], color: '#ED4151'},
      { label: "Wajar", data: [[1,80]], color: '#36B3E3'}
	 ];

    $.plot('#flotPie1', piedata, {
      series: {
        pie: {
          show: true,
          radius: 1,
          label: {
            show: true,
            radius: 2/3,
            formatter: labelFormatter,
            threshold: 0.1
          }
        }
      },
      grid: {
        hoverable: true,
        clickable: true
      }
    });


    function labelFormatter(label, series) {
		  return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
	  }

});
