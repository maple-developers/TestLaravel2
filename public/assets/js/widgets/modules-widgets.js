try {
  Apex.tooltip = {
    theme: 'dark'
  }

  /*
      ==============================
      |    @Options Charts Script   |
      ==============================
  */

  /*
      ======================================
          Visitor Statistics | Options
      ======================================
  */


  // Total Visits

  var spark1 = {
    chart: {
      id: 'unique-visits',
      group: 'sparks2',
      type: 'line',
      height: 80,
      sparkline: {
        enabled: true
      },
      dropShadow: {
        enabled: true,
        top: 1,
        left: 1,
        blur: 2,
        color: '#e2a03f',
        opacity: 0.7,
      }
    },
    series: [{
      data: [21, 9, 36, 12, 44, 25, 59, 41, 66, 25]
    }],
    stroke: {
      curve: 'smooth',
      width: 2,
    },
    markers: {
      size: 0
    },
    grid: {
      padding: {
        top: 35,
        bottom: 0,
        left: 40
      }
    },
    colors: ['#e2a03f'],
    tooltip: {
      x: {
        show: false
      },
      y: {
        title: {
          formatter: function formatter(val) {
            return '';
          }
        }
      }
    },
    responsive: [{
      breakpoint: 1351,
      options: {
        chart: {
          height: 95,
        },
        grid: {
          padding: {
            top: 35,
            bottom: 0,
            left: 0
          }
        },
      },
    },
    {
      breakpoint: 1200,
      options: {
        chart: {
          height: 80,
        },
        grid: {
          padding: {
            top: 35,
            bottom: 0,
            left: 40
          }
        },
      },
    },
    {
      breakpoint: 576,
      options: {
        chart: {
          height: 95,
        },
        grid: {
          padding: {
            top: 45,
            bottom: 0,
            left: 0
          }
        },
      },
    }

    ]
  }

  // Paid Visits

  var spark2 = {
    chart: {
      id: 'total-users',
      group: 'sparks1',
      type: 'line',
      height: 80,
      sparkline: {
        enabled: true
      },
      dropShadow: {
        enabled: true,
        top: 3,
        left: 1,
        blur: 3,
        color: '#009688',
        opacity: 0.7,
      }
    },
    series: [{
      data: [22, 19, 30, 47, 32, 44, 34, 55, 41, 69]
    }],
    stroke: {
      curve: 'smooth',
      width: 2,
    },
    markers: {
      size: 0
    },
    grid: {
      padding: {
        top: 35,
        bottom: 0,
        left: 40
      }
    },
    colors: ['#009688'],
    tooltip: {
      x: {
        show: false
      },
      y: {
        title: {
          formatter: function formatter(val) {
            return '';
          }
        }
      }
    },
    responsive: [{
      breakpoint: 1351,
      options: {
        chart: {
          height: 95,
        },
        grid: {
          padding: {
            top: 35,
            bottom: 0,
            left: 0
          }
        },
      },
    },
    {
      breakpoint: 1200,
      options: {
        chart: {
          height: 80,
        },
        grid: {
          padding: {
            top: 35,
            bottom: 0,
            left: 40
          }
        },
      },
    },
    {
      breakpoint: 576,
      options: {
        chart: {
          height: 95,
        },
        grid: {
          padding: {
            top: 35,
            bottom: 0,
            left: 0
          }
        },
      },
    }
    ]
  }


  /*
      ===================================
          Unique Visitors | Options
      ===================================
  */

  var d_1options1 = {
    chart: {
      height: 350,
      type: 'bar',
      toolbar: {
        show: false,
      },
      dropShadow: {
        enabled: true,
        top: 1,
        left: 1,
        blur: 1,
        color: '#515365',
        opacity: 0.3,
      }
    },
    colors: ['#5c1ac3', '#ffbb44', '#832023', '#152d74'],
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '55%',
        endingShape: 'rounded'
      },
    },
    dataLabels: {
      enabled: false
    },
    legend: {
      position: 'bottom',
      horizontalAlign: 'center',
      fontSize: '14px',
      markers: {
        width: 10,
        height: 10,
      },
      itemMargin: {
        horizontal: 0,
        vertical: 8
      }
    },
    grid: {
      borderColor: '#191e3a',
    },
    stroke: {
      show: true,
      width: 2,
      colors: ['transparent']
    },
    series: [{
      name: 'PE',
      data: [58, 44, 55, 57, 56, 61, 58, 63, 60, 66, 56, 63]
    }, {
      name: 'PET',
      data: [101, 95, 65, 80, 116, 125, 100, 100, 85, 99, 75, 93]
    }, {
      name: 'ALU',
      data: [180, 195, 165, 180, 196, 175, 120, 160, 133, 140, 125, 136]
    }, {
      name: 'PETW',
      data: [91, 76, 85, 101, 98, 87, 105, 91, 114, 94, 66, 70]
    }],
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    },
    fill: {
      type: 'gradient',
      gradient: {
        shade: 'dark',
        type: 'vertical',
        shadeIntensity: 0.3,
        inverseColors: false,
        opacityFrom: 1,
        opacityTo: 0.8,
        stops: [0, 100]
      }
    },
    tooltip: {
      theme: 'dark',
      y: {
        formatter: function (val) {
          return val
        }
      }
    }
  }

  /*
      ==============================
          Statistics | Options
      ==============================
  */

  // Followers

  var d_1options3 = {
    chart: {
      id: 'sparkline1',
      type: 'area',
      height: 160,
      sparkline: {
        enabled: true
      },
    },
    stroke: {
      curve: 'smooth',
      width: 2,
    },
    series: [{
      name: 'Sales',
      data: [38, 60, 38, 52, 36, 40, 28]
    }],
    labels: ['1', '2', '3', '4', '5', '6', '7'],
    yaxis: {
      min: 0
    },
    colors: ['#1b55e2'],
    tooltip: {
      x: {
        show: false,
      }
    },
    fill: {
      type: "gradient",
      gradient: {
        type: "vertical",
        shadeIntensity: 1,
        inverseColors: !1,
        opacityFrom: .40,
        opacityTo: .05,
        stops: [45, 100]
      }
    },
  }

  // Referral

  var d_1options4 = {
    chart: {
      id: 'sparkline1',
      type: 'area',
      height: 160,
      sparkline: {
        enabled: true
      },
    },
    stroke: {
      curve: 'smooth',
      width: 2,
    },
    series: [{
      name: 'Sales',
      data: [60, 28, 52, 38, 40, 36, 38]
    }],
    labels: ['1', '2', '3', '4', '5', '6', '7'],
    yaxis: {
      min: 0
    },
    colors: ['#e7515a'],
    tooltip: {
      x: {
        show: false,
      }
    },
    fill: {
      type: "gradient",
      gradient: {
        type: "vertical",
        shadeIntensity: 1,
        inverseColors: !1,
        opacityFrom: .40,
        opacityTo: .05,
        stops: [45, 100]
      }
    },
  }

  // Engagement Rate

  var d_1options5 = {
    chart: {
      id: 'sparkline1',
      type: 'area',
      height: 160,
      sparkline: {
        enabled: true
      },
    },
    stroke: {
      curve: 'smooth',
      width: 2,
    },
    fill: {
      opacity: 1,
    },
    series: [{
      name: 'Sales',
      data: [28, 50, 36, 60, 38, 52, 38]
    }],
    labels: ['1', '2', '3', '4', '5', '6', '7'],
    yaxis: {
      min: 0
    },
    colors: ['#009688'],
    tooltip: {
      x: {
        show: false,
      }
    },
    fill: {
      type: "gradient",
      gradient: {
        type: "vertical",
        shadeIntensity: 1,
        inverseColors: !1,
        opacityFrom: .40,
        opacityTo: .05,
        stops: [45, 100]
      }
    },
  }




  /*
      ==============================
      |    @Render Charts Script    |
      ==============================
  */


  /*
      ======================================
          Visitor Statistics | Script
      ======================================
  */

  // Total Visits
  d_1C_1 = new ApexCharts(document.querySelector("#total-users"), spark1);
  d_1C_1.render();

  // Paid Visits
  d_1C_2 = new ApexCharts(document.querySelector("#paid-visits"), spark2);
  d_1C_2.render();

  /*
      ===================================
          Unique Visitors | Script
      ===================================
  */

  var d_1C_3 = new ApexCharts(
    document.querySelector("#uniqueVisits"),
    d_1options1
  );
  d_1C_3.render();

  /*
      ==============================
          Statistics | Script
      ==============================
  */


  // Followers

  var d_1C_5 = new ApexCharts(document.querySelector("#hybrid_followers"), d_1options3);
  d_1C_5.render()

  // Referral

  var d_1C_6 = new ApexCharts(document.querySelector("#hybrid_followers1"), d_1options4);
  d_1C_6.render()

  // Engagement Rate

  var d_1C_7 = new ApexCharts(document.querySelector("#hybrid_followers3"), d_1options5);
  d_1C_7.render()


} catch (e) {
  // statements
  console.log(e);
}




try {

  /*
      ==============================
      |    @Options Charts Script   |
      ==============================
  */

  /*
      =============================
          Daily Sales | Options
      =============================
  */
  var d_2options1 = {
    chart: {
      height: 160,
      type: 'bar',
      stacked: true,
      stackType: '100%',
      toolbar: {
        show: false,
      }
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      width: 1,
    },
    colors: ['#e2a03f', '#e0e6ed'],
    responsive: [{
      breakpoint: 480,
      options: {
        legend: {
          position: 'bottom',
          offsetX: -10,
          offsetY: 0
        }
      }
    }],
    series: [{
      name: 'Sales',
      data: [44, 55, 41, 67, 22, 43, 21]
    }, {
      name: 'Last Week',
      data: [13, 23, 20, 8, 13, 27, 33]
    }],
    xaxis: {
      labels: {
        show: false,
      },
      categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'],
    },
    yaxis: {
      show: false
    },
    fill: {
      opacity: 1
    },
    plotOptions: {
      bar: {
        horizontal: false,
        endingShape: 'rounded',
        columnWidth: '25%',
      }
    },
    legend: {
      show: false,
    },
    grid: {
      show: false,
      xaxis: {
        lines: {
          show: false
        }
      },
      padding: {
        top: 10,
        right: 0,
        bottom: -40,
        left: 0
      },
    },
  }

  /*
      =============================
          Total Orders | Options
      =============================
  */
  var d_2options2 = {
    chart: {
      id: 'sparkline1',
      group: 'sparklines',
      type: 'area',
      height: 280,
      sparkline: {
        enabled: true
      },
    },
    stroke: {
      curve: 'smooth',
      width: 2
    },
    fill: {
      opacity: 1,
    },
    series: [{
      name: 'Sales',
      data: [28, 40, 36, 52, 38, 60, 38, 52, 36, 40]
    }],
    labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
    yaxis: {
      min: 0
    },
    grid: {
      padding: {
        top: 125,
        right: 0,
        bottom: 36,
        left: 0
      },
    },
    fill: {
      type: "gradient",
      gradient: {
        type: "vertical",
        shadeIntensity: 1,
        inverseColors: !1,
        opacityFrom: .40,
        opacityTo: .05,
        stops: [45, 100]
      }
    },
    tooltip: {
      x: {
        show: false,
      },
      theme: 'dark'
    },
    colors: ['#fff']
  }

  /*
      =================================
          Revenue Monthly | Options
      =================================
  */
  var options1 = {
    chart: {
      fontFamily: 'Nunito, sans-serif',
      height: 365,
      type: 'area',
      zoom: {
        enabled: false
      },
      dropShadow: {
        enabled: true,
        opacity: 0.3,
        blur: 5,
        left: -7,
        top: 22
      },
      toolbar: {
        show: false
      },
      events: {
        mounted: function (ctx, config) {
          const highest1 = ctx.getHighestValueInSeries(0);
          const highest2 = ctx.getHighestValueInSeries(1);
          const highest3 = ctx.getHighestValueInSeries(2);

          ctx.addPointAnnotation({
            x: new Date(ctx.w.globals.seriesX[0][ctx.w.globals.series[0].indexOf(highest1)]).getTime(),
            y: highest1,
            label: {
              style: {
                cssClass: 'd-none'
              }
            },
            customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#1b55e2" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
            }
          })

          ctx.addPointAnnotation({
            x: new Date(ctx.w.globals.seriesX[1][ctx.w.globals.series[1].indexOf(highest2)]).getTime(),
            y: highest2,
            label: {
              style: {
                cssClass: 'd-none'
              }
            },
            customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#e7515a" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
            }
          })

          ctx.addPointAnnotation({
            x: new Date(ctx.w.globals.seriesX[2][ctx.w.globals.series[2].indexOf(highest3)]).getTime(),
            y: highest3,
            label: {
              style: {
                cssClass: 'd-none'
              }
            },
            customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#f4ea04" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
            }
          })
        },
      }
    },
    colors: ['#1b55e2', '#e7515a', '#f4ea04'],
    dataLabels: {
      enabled: false
    },
    markers: {
      discrete: [{
        seriesIndex: 0,
        dataPointIndex: 7,
        fillColor: '#000',
        strokeColor: '#000',
        size: 5
      }, {
        seriesIndex: 2,
        dataPointIndex: 11,
        fillColor: '#000',
        strokeColor: '#000',
        size: 4
      }]
    },
    subtitle: {
      text: 'Producers Price',
      align: 'left',
      margin: 0,
      offsetX: -10,
      offsetY: 35,
      floating: false,
      style: {
        fontSize: '14px',
        color: '#888ea8'
      }
    },
    title: {
      text: 'BOPP / 2020',
      align: 'left',
      margin: 0,
      offsetX: -10,
      offsetY: 0,
      floating: false,
      style: {
        fontSize: '25px',
        color: '#bfc9d4'
      },
    },
    stroke: {
      show: true,
      curve: 'smooth',
      width: 2,
      lineCap: 'square'
    },
    series: [{
      name: 'Sabic',
      data: [16800, 16800, 15500, 17800, 15500, 17000, 14800, 16000, 15000, 17000, 19000, 17000]
    }, {
      name: 'Aramco',
      data: [16500, 17500, 16200, 17300, 19500, 18300, 16000, 17000, 16000, 19000, 18000, 19000]
    }, {
      name: 'Sbaf',
      data: [16800, 17900, 16700, 17800, 16300, 19700, 20000, 17200, 16800, 16800, 15500, 17800]
    }],
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    xaxis: {
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      crosshairs: {
        show: true
      },
      labels: {
        offsetX: 0,
        offsetY: 5,
        style: {
          fontSize: '12px',
          fontFamily: 'Nunito, sans-serif',
          cssClass: 'apexcharts-xaxis-title',
        },
      }
    },
    yaxis: {
      labels: {
        formatter: function (value, index) {
          return value + ' $'
        },
        offsetX: -22,
        offsetY: 0,
        style: {
          fontSize: '12px',
          fontFamily: 'Nunito, sans-serif',
          cssClass: 'apexcharts-yaxis-title',
        },
      }
    },
    grid: {
      borderColor: '#191e3a',
      strokeDashArray: 5,
      xaxis: {
        lines: {
          show: true
        }
      },
      yaxis: {
        lines: {
          show: false,
        }
      },
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
        left: -10
      },
    },
    legend: {
      position: 'top',
      horizontalAlign: 'right',
      offsetY: -50,
      fontSize: '16px',
      fontFamily: 'Nunito, sans-serif',
      markers: {
        width: 10,
        height: 10,
        strokeWidth: 0,
        strokeColor: '#fff',
        fillColors: undefined,
        radius: 12,
        onClick: undefined,
        offsetX: 0,
        offsetY: 0
      },
      itemMargin: {
        horizontal: 0,
        vertical: 20
      }
    },
    tooltip: {
      theme: 'dark',
      marker: {
        show: true,
      },
      x: {
        show: false,
      }
    },
    fill: {
      type: "gradient",
      gradient: {
        type: "vertical",
        shadeIntensity: 1,
        inverseColors: !1,
        opacityFrom: .28,
        opacityTo: .05,
        stops: [45, 100]
      }
    },
    responsive: [{
      breakpoint: 575,
      options: {
        legend: {
          offsetY: -30,
        },
      },
    }]
  }
  var options22 = {
    chart: {
      fontFamily: 'Nunito, sans-serif',
      height: 365,
      type: 'area',
      zoom: {
        enabled: false
      },
      dropShadow: {
        enabled: true,
        opacity: 0.3,
        blur: 5,
        left: -7,
        top: 22
      },
      toolbar: {
        show: false
      },
      events: {
        mounted: function (ctx, config) {
          const highest1 = ctx.getHighestValueInSeries(0);
          const highest2 = ctx.getHighestValueInSeries(1);

          ctx.addPointAnnotation({
            x: new Date(ctx.w.globals.seriesX[0][ctx.w.globals.series[0].indexOf(highest1)]).getTime(),
            y: highest1,
            label: {
              style: {
                cssClass: 'd-none'
              }
            },
            customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#1b55e2" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
            }
          })

          ctx.addPointAnnotation({
            x: new Date(ctx.w.globals.seriesX[1][ctx.w.globals.series[1].indexOf(highest2)]).getTime(),
            y: highest2,
            label: {
              style: {
                cssClass: 'd-none'
              }
            },
            customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#e7515a" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
            }
          })
        },
      }
    },
    colors: ['#1b55e2', '#e7515a', 'transparent'],
    dataLabels: {
      enabled: false
    },
    markers: {
      discrete: [{
        seriesIndex: 0,
        dataPointIndex: 7,
        fillColor: '#000',
        strokeColor: '#000',
        size: 5
      }, {
        seriesIndex: 2,
        dataPointIndex: 11,
        fillColor: '#000',
        strokeColor: '#000',
        size: 4
      }]
    },
    subtitle: {
      text: 'Conversion Index',
      align: 'left',
      margin: 0,
      offsetX: -10,
      offsetY: 35,
      floating: false,
      style: {
        fontSize: '14px',
        color: '#888ea8'
      }
    },
    title: {
      text: 'PETW / Afico',
      align: 'left',
      margin: 0,
      offsetX: -10,
      offsetY: 0,
      floating: false,
      style: {
        fontSize: '25px',
        color: '#bfc9d4'
      },
    },
    stroke: {
      show: true,
      curve: 'smooth',
      width: 2,
      lineCap: 'square'
    },
    series: [{
      name: 'Rhythm',
      data: [930, 1050, 1032, 1001, 985, 992, 1005, 1090, 1113, 1200, 960, 1300]
    }, {
      name: 'Films',
      data: [1060, 1250, 1235, 1480, 1360, 1161, 1390, 1720, 1320, 1518, 1260, 1400]
    }, {
      name: 'Conversion Rate',
      show: false,
      data: [1060 - 930, 1250 - 1050, 1235 - 1032, 1480 - 1001, 1360 - 985, 1161 - 992, 1390 - 1005, 1720 - 1090, 1320 - 1113, 1518 - 1200, 1260 - 960,
      1400 - 1300]
    }],
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    xaxis: {
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      crosshairs: {
        show: true
      },
      labels: {
        offsetX: 0,
        offsetY: 5,
        style: {
          fontSize: '12px',
          fontFamily: 'Nunito, sans-serif',
          cssClass: 'apexcharts-xaxis-title',
        },
      }
    },
    yaxis: {
      labels: {
        formatter: function (value, index) {
          return value + ' $'
        },
        offsetX: -22,
        offsetY: 0,
        style: {
          fontSize: '12px',
          fontFamily: 'Nunito, sans-serif',
          cssClass: 'apexcharts-yaxis-title',
        },
      }
    },
    grid: {
      borderColor: '#192e3a',
      strokeDashArray: 5,
      xaxis: {
        lines: {
          show: true
        }
      },
      yaxis: {
        lines: {
          show: false,
        }
      },
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
        left: -10
      },
    },
    legend: {
      position: 'top',
      horizontalAlign: 'right',
      offsetY: -50,
      fontSize: '16px',
      fontFamily: 'Nunito, sans-serif',
      markers: {
        width: 10,
        height: 10,
        strokeWidth: 0,
        strokeColor: '#fff',
        fillColors: undefined,
        radius: 12,
        onClick: undefined,
        offsetX: 0,
        offsetY: 0
      },
      itemMargin: {
        horizontal: 0,
        vertical: 20
      }
    },
    tooltip: {
      theme: 'dark',
      marker: {
        show: true,
      },
      x: {
        show: false,
      }
    },
    fill: {
      type: "gradient",
      gradient: {
        type: "vertical",
        shadeIntensity: 1,
        inverseColors: !1,
        opacityFrom: .28,
        opacityTo: .05,
        stops: [45, 100]
      }
    },
    responsive: [{
      breakpoint: 575,
      options: {
        legend: {
          offsetY: -30,
        },
      },
    }]
  }


  var options33 = {
    chart: {
      fontFamily: 'Nunito, sans-serif',
      height: 365,
      type: 'area',
      zoom: {
        enabled: false
      },
      dropShadow: {
        enabled: true,
        opacity: 0.3,
        blur: 5,
        left: -7,
        top: 22
      },
      toolbar: {
        show: false
      },
      events: {
        mounted: function (ctx, config) {
          const highest1 = ctx.getHighestValueInSeries(0);
          const highest2 = ctx.getHighestValueInSeries(1);
          const highest3 = ctx.getHighestValueInSeries(2);
          const highest4 = ctx.getHighestValueInSeries(3);
          const highest5 = ctx.getHighestValueInSeries(4);
          const highest6 = ctx.getHighestValueInSeries(5);

          ctx.addPointAnnotation({
            x: new Date(ctx.w.globals.seriesX[0][ctx.w.globals.series[0].indexOf(highest1)]).getTime(),
            y: highest1,
            label: {
              style: {
                cssClass: 'd-none'
              }
            },
            customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#1b55e2" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
            }
          })

          ctx.addPointAnnotation({
            x: new Date(ctx.w.globals.seriesX[1][ctx.w.globals.series[1].indexOf(highest2)]).getTime(),
            y: highest2,
            label: {
              style: {
                cssClass: 'd-none'
              }
            },
            customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#e7515a" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
            }
          })

          ctx.addPointAnnotation({
            x: new Date(ctx.w.globals.seriesX[2][ctx.w.globals.series[2].indexOf(highest3)]).getTime(),
            y: highest3,
            label: {
              style: {
                cssClass: 'd-none'
              }
            },
            customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#feb019" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
            }
          })

          ctx.addPointAnnotation({
            x: new Date(ctx.w.globals.seriesX[3][ctx.w.globals.series[3].indexOf(highest4)]).getTime(),
            y: highest4,
            label: {
              style: {
                cssClass: 'd-none'
              }
            },
            customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#ab5800" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
            }
          })

          ctx.addPointAnnotation({
            x: new Date(ctx.w.globals.seriesX[4][ctx.w.globals.series[4].indexOf(highest5)]).getTime(),
            y: highest5,
            label: {
              style: {
                cssClass: 'd-none'
              }
            },
            customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#775dd0" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
            }
          })

          ctx.addPointAnnotation({
            x: new Date(ctx.w.globals.seriesX[5][ctx.w.globals.series[5].indexOf(highest6)]).getTime(),
            y: highest6,
            label: {
              style: {
                cssClass: 'd-none'
              }
            },
            customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#2cf246" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
            }
          })
        },
      }
    },
    colors: ['#1b55e2', '#e7515a', '#feb019', '#ab5800', '#775dd0', '#2cf246'],
    dataLabels: {
      enabled: false
    },
    markers: {
      discrete: [{
        seriesIndex: 0,
        dataPointIndex: 7,
        fillColor: '#000',
        strokeColor: '#000',
        size: 5
      }, {
        seriesIndex: 2,
        dataPointIndex: 11,
        fillColor: '#000',
        strokeColor: '#000',
        size: 4
      }]
    },
    subtitle: {
      text: 'Line Loading Index',
      align: 'left',
      margin: 0,
      offsetX: -10,
      offsetY: 35,
      floating: false,
      style: {
        fontSize: '14px',
        color: '#888ea8'
      }
    },
    title: {
      text: 'ALL / 2020',
      align: 'left',
      margin: 0,
      offsetX: -10,
      offsetY: 0,
      floating: false,
      style: {
        fontSize: '25px',
        color: '#bfc9d4'
      },
    },
    stroke: {
      show: true,
      curve: 'smooth',
      width: 2,
      lineCap: 'square'
    },
    series: [{
      name: 'ALU',
      data: [1, 5, 8, 11, 9, 7, 10, 12, 14, 9, 6, 3]
    }, {
      name: 'BOPP',
      data: [7, 11, 8, 9, 6, 4, 6, 5, 9, 11, 13, 15]
    }, {
      name: 'CPP',
      data: [12, 13, 10, 14, 11, 8, 9, 10, 13, 11, 12, 9]
    }, {
      name: 'PE',
      data: [3, 2, 1, 0.5, 4, 6, 5, 4, 2, 3, 7, 9]
    }, {
      name: 'PET',
      data: [4, 6, 3, 5, 8, 10, 8, 6.5, 5, 4, 3, 1]
    }, {
      name: 'PETW',
      data: [6, 5, 7, 4.5, 4, 3, 2, 1, 1, 2, 3.5, 6]
    }],
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    xaxis: {
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      crosshairs: {
        show: true
      },
      labels: {
        offsetX: 0,
        offsetY: 5,
        style: {
          fontSize: '12px',
          fontFamily: 'Nunito, sans-serif',
          cssClass: 'apexcharts-xaxis-title',
        },
      }
    },
    yaxis: {
      labels: {
        formatter: function (value, index) {
          return value
        },
        offsetX: -22,
        offsetY: 0,
        style: {
          fontSize: '12px',
          fontFamily: 'Nunito, sans-serif',
          cssClass: 'apexcharts-yaxis-title',
        },
      },
      title: {
        text: 'Loading Weeks',
      }
    },
    grid: {
      borderColor: '#192e3a',
      strokeDashArray: 5,
      xaxis: {
        lines: {
          show: true
        }
      },
      yaxis: {
        lines: {
          show: false,
        }
      },
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
        left: -10
      },
    },
    legend: {
      position: 'top',
      horizontalAlign: 'right',
      offsetY: -50,
      fontSize: '16px',
      fontFamily: 'Nunito, sans-serif',
      markers: {
        width: 10,
        height: 10,
        strokeWidth: 0,
        strokeColor: '#fff',
        fillColors: undefined,
        radius: 12,
        onClick: undefined,
        offsetX: 0,
        offsetY: 0
      },
      itemMargin: {
        horizontal: 0,
        vertical: 20
      }
    },
    tooltip: {
      theme: 'dark',
      marker: {
        show: true,
      },
      x: {
        show: false,
      }
    },
    fill: {
      type: "gradient",
      gradient: {
        type: "vertical",
        shadeIntensity: 1,
        inverseColors: !1,
        opacityFrom: .28,
        opacityTo: .05,
        stops: [45, 100]
      }
    },
    responsive: [{
      breakpoint: 575,
      options: {
        legend: {
          offsetY: -30,
        },
      },
    }]
  }

  /*
      ==================================
          Sales By Category | Options
      ==================================
  */
  var options = {
    chart: {
      type: 'donut',
      width: 380
    },
    colors: ['#5c1ac3', '#e2a03f', '#e7515a', '#e2a03f'],
    dataLabels: {
      enabled: false
    },
    legend: {
      position: 'bottom',
      horizontalAlign: 'center',
      fontSize: '14px',
      markers: {
        width: 10,
        height: 10,
      },
      itemMargin: {
        horizontal: 0,
        vertical: 8
      }
    },
    plotOptions: {
      pie: {
        donut: {
          size: '65%',
          background: 'transparent',
          labels: {
            show: true,
            name: {
              show: true,
              fontSize: '29px',
              fontFamily: 'Nunito, sans-serif',
              color: undefined,
              offsetY: -10
            },
            value: {
              show: true,
              fontSize: '26px',
              fontFamily: 'Nunito, sans-serif',
              color: '#bfc9d4',
              offsetY: 16,
              formatter: function (val) {
                return val
              }
            },
            total: {
              show: true,
              showAlways: true,
              label: 'Total',
              color: '#888ea8',
              formatter: function (w) {
                return w.globals.seriesTotals.reduce(function (a, b) {
                  return a + b
                }, 0)
              }
            }
          }
        }
      }
    },
    stroke: {
      show: true,
      width: 25,
      colors: '#0e1726'
    },
    series: [985, 737, 270],
    labels: ['Apparel', 'Electronic', 'Others'],
    responsive: [{
      breakpoint: 1599,
      options: {
        chart: {
          width: '350px',
          height: '400px'
        },
        legend: {
          position: 'bottom'
        }
      },

      breakpoint: 1439,
      options: {
        chart: {
          width: '250px',
          height: '390px'
        },
        legend: {
          position: 'bottom'
        },
        plotOptions: {
          pie: {
            donut: {
              size: '65%',
            }
          }
        }
      },
    }]
  }


  /*
      ==============================
      |    @Render Charts Script    |
      ==============================
  */


  /*
      ============================
          Daily Sales | Render
      ============================
  */
  var d_2C_1 = new ApexCharts(document.querySelector("#daily-sales"), d_2options1);
  d_2C_1.render();

  /*
      ============================
          Total Orders | Render
      ============================
  */
  var d_2C_2 = new ApexCharts(document.querySelector("#total-orders"), d_2options2);
  d_2C_2.render();

  /*
      ================================
          Revenue Monthly | Render
      ================================
  */
  var chart1 = new ApexCharts(
    document.querySelector("#revenueMonthly"),
    options1
  );

  chart1.render();

  var chart2 = new ApexCharts(
    document.querySelector("#revenueMonthlyConsumers"),
    options22
  );
  chart2.render();

  var chart2 = new ApexCharts(
    document.querySelector("#lineLoadingMonthly"),
    options33
  );
  chart2.render();

  /*
      =================================
          Sales By Category | Render
      =================================
  */
  var chart = new ApexCharts(
    document.querySelector("#chart-2"),
    options
  );

  chart.render();

  /*
      =============================================
          Perfect Scrollbar | Recent Activities
      =============================================
  */
  // const ps = new PerfectScrollbar(document.querySelector('.mt-container'));
  $('.mt-container').each(function () { const ps = new PerfectScrollbar($(this)[0]); });


} catch (e) {
  console.log(e);
}