$(document).ready(function() {
  var bsa1 = function() {
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bsa1/wlu",
        success: function(msg) {
            $(".bsa1-wlu").html(msg.nilai + " cm");
            $(".rf-waktu-bsa1").html(msg.created_at);
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bsa1/wld",
        success: function(msg) {
            $(".bsa1-wld1").html(msg.nilai + " cm");
            $(".bsa1-wld2").html(msg.nilai + " cm");
            $(".bsa1-wld3").html(msg.nilai + " cm");
            $(".bsa1-wld4").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bsa1/gt1",
        success: function(msg) {
            $(".bsa1-gt1").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bsa1/gt2",
        success: function(msg) {
            $(".bsa1-gt2").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bsa1/gt3",
        success: function(msg) {
            $(".bsa1-gt3").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bsa1/gt4",
        success: function(msg) {
            $(".bsa1-gt4").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbsa1/gt1",
        success: function(msg) {
            $(".bsa1-dbt1").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbsa1/gt2",
        success: function(msg) {
            $(".bsa1-dbt2").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbsa1/gt3",
        success: function(msg) {
            $(".bsa1-dbt3").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbsa1/gt4",
        success: function(msg) {
            $(".bsa1-dbt4").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/supplaibsa1",
        success: function(msg) {
            $(".bsa1-supplai").html(msg.nilai + " L/dtk");
        }
    });
  }

// ===============================================================

  var bpk8 = function() {
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bpk8/wl1",
        success: function(msg) {
            $(".bpk8-wlu").html(msg.nilai + " cm");
            $(".bpk8te-wlu").html(msg.nilai + " cm");
            $(".rf-waktu-bpk8").html(msg.created_at);
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bpk8/wl2",
        success: function(msg) {
            $(".bpk8-wld1").html(msg.nilai + " cm");
            $(".bpk8-wld2").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bpk8/wl3",
        success: function(msg) {
            $(".bpk8-wld3").html(msg.nilai + " cm");
            $(".bpk8-wld4").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bpk8/wl4",
        success: function(msg) {
            $(".bpk8te-wld").html(msg.nilai + " cm");
        }
    });
    // $.ajax({
    //     type: "GET",
    //     datatype: "JSON",
    //     url: "api/bpk8/wl5",
    //     success: function(msg) {
    //         $(".bpk8-wl2").html(msg.nilai + " cm");
    //     }
    // });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bpk8/gt1",
        success: function(msg) {
            $(".bpk8-gt1").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bpk8/gt2",
        success: function(msg) {
            $(".bpk8-gt2").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bpk8/gt3",
        success: function(msg) {
            $(".bpk8-gt3").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bpk8/gt4",
        success: function(msg) {
            $(".bpk8-gt4").html(msg.nilai + " cm");
        }
    });
    $.ajax({
      type: "GET",
      datatype: "JSON",
      url: "api/bpk8/gt5",
      success: function(msg) {
          $(".bpk8te-gt1").html(msg.nilai + " cm");
      }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbpk8/gt1",
        success: function(msg) {
            $(".bpk8-dbt1").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbpk8/gt2",
        success: function(msg) {
            $(".bpk8-dbt2").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbpk8/gt3",
        success: function(msg) {
            $(".bpk8-dbt3").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbpk8/gt4",
        success: function(msg) {
            $(".bpk8-dbt4").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbpk8/gt5",
        success: function(msg) {
            $(".bpk8te-dbt1").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/supplaibpk8",
        success: function(msg) {
            $(".bpk8-supplai").html(msg.nilai + " L/dtk");
        }
    });
  }
  
  // ===============================================================

  var bsa10 = function() {
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bsa10/wl1",
        success: function(msg) {
            $(".bsa10-wlu").html(msg.nilai + " cm");
            $(".rf-waktu-bsa10").html(msg.created_at);
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bsa10/wl2",
        success: function(msg) {
            $(".bsa10-wld1").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bsa10/wl3",
        success: function(msg) {
            $(".bsa10-wld2").html(msg.nilai + " cm");
            $(".bsa10-wld3").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bsa10/wl4",
        success: function(msg) {
            $(".bsa10-wld4").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bsa10/wl5",
        success: function(msg) {
            $(".bsa10-wld5").html(msg.nilai + " cm");
            $(".bsa10-wld6").html(msg.nilai + " cm");
        }
    });
    $.ajax({
      type: "GET",
      datatype: "JSON",
      url: "api/bsa10/wl6",
      success: function(msg) {
          $(".bsa10-wld7").html(msg.nilai + " cm");
          $(".bsa10-wld8").html(msg.nilai + " cm");
          $(".bsa10-wld9").html(msg.nilai + " cm");
          $(".bsa10-wld10").html(msg.nilai + " cm");
      }
  });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bsa10/gt1",
        success: function(msg) {
            $(".bsa10-gt1").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bsa10/gt2",
        success: function(msg) {
            $(".bsa10-gt2").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bsa10/gt3",
        success: function(msg) {
            $(".bsa10-gt3").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bsa10/gt4",
        success: function(msg) {
            $(".bsa10-gt4").html(msg.nilai + " cm");
        }
    });
    $.ajax({
      type: "GET",
      datatype: "JSON",
      url: "api/bsa10/gt5",
      success: function(msg) {
          $(".bsa10-gt5").html(msg.nilai + " cm");
      }
    });
    $.ajax({
      type: "GET",
      datatype: "JSON",
      url: "api/bsa10/gt6",
      success: function(msg) {
          $(".bsa10-gt6").html(msg.nilai + " cm");
      }
    });
    $.ajax({
      type: "GET",
      datatype: "JSON",
      url: "api/bsa10/gt7",
      success: function(msg) {
          $(".bsa10-gt7").html(msg.nilai + " cm");
      }
    });
    $.ajax({
      type: "GET",
      datatype: "JSON",
      url: "api/bsa10/gt8",
      success: function(msg) {
          $(".bsa10-gt8").html(msg.nilai + " cm");
      }
    });
    $.ajax({
      type: "GET",
      datatype: "JSON",
      url: "api/bsa10/gt9",
      success: function(msg) {
          $(".bsa10-gt9").html(msg.nilai + " cm");
      }
    });
    $.ajax({
      type: "GET",
      datatype: "JSON",
      url: "api/bsa10/gt10",
      success: function(msg) {
          $(".bsa10-gt10").html(msg.nilai + " cm");
      }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbsa10/gt1",
        success: function(msg) {
            $(".bsa10-dbt1").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbsa10/gt2",
        success: function(msg) {
            $(".bsa10-dbt2").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbsa10/gt3",
        success: function(msg) {
            $(".bsa10-dbt3").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbsa10/gt4",
        success: function(msg) {
            $(".bsa10-dbt4").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbsa10/gt5",
        success: function(msg) {
            $(".bsa10-dbt5").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbsa10/gt6",
        success: function(msg) {
            $(".bsa10-dbt6").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbsa10/gt7",
        success: function(msg) {
            $(".bsa10-dbt7").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbsa10/gt8",
        success: function(msg) {
            $(".bsa10-dbt8").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbsa10/gt9",
        success: function(msg) {
            $(".bsa10-dbt9").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbsa10/gt10",
        success: function(msg) {
            $(".bsa10-dbt10").html(msg.debit + " L/dtk");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/supplaibsa10",
        success: function(msg) {
            $(".bsa10-supplai").html(msg.nilai + " L/dtk");
        }
    });
  }

  var bmj1 = function() {
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bmj1/wlu",
        success: function(msg) {
            $(".bmj1-wlu").html(msg.nilai + " cm");
            $(".tma-waktu-bmj1").html(msg.created_at);
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bmj1/wld",
        success: function(msg) {
            $(".bmj1-wld").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/bmj1/gt1",
        success: function(msg) {
            $(".bmj1-gt1").html(msg.nilai + " cm");
        }
    });
    $.ajax({
        type: "GET",
        datatype: "JSON",
        url: "api/debitbmj1/gt1",
        success: function(msg) {
            $(".bmj1-dbt1").html(msg.debit + " L/dtk");
        }
    });
  }

  let benteng = function(){
    $.ajax({
        type:"GET",
        datatype:"JSON",
        url:"http://monitoring.das.saddang.com/home/tma",
        success:function(msg){
            $(".tma-nilai").html(msg.TMA +" meter");
            $(".tma-waktu").html(msg.waktu );
        }
    });
     $.ajax({
        type:"GET",
        datatype:"JSON",
        url:"http://monitoring.das.saddang.com/home/ch",
        success:function(msg){
            $(".rf-nilai").html(msg.curah_hujan +" mm");
            $(".rf-waktu").html(msg.waktu );
        }
    });
}

let weather = function(){
    $.ajax({
        type:"GET",
        datatype:"JSON",
        url: "api/get_weather",
        success:function(msg){
            $(".temperature").html(msg.temperature);
            $(".humidity").html(msg.humidity );
            $(".barometer").html(msg.barometer );
            $(".sun_rad").html(msg.solar_rad );
            $(".sun_dur").html(msg.sun_duration );
            $(".wind_dir").html(msg.wind_dir );
            $(".wind_spd").html(msg.wind_speed );
            $(".rainfall").html(msg.rainfall );
        }
    });
}

  bsa1();
  bpk8();
  bsa10();
  bmj1();
  benteng();
  weather();
  setInterval(bsa1(), 30000);
  setInterval(bsa10(), 30000);
  setInterval(bpk8(), 30000);
  setInterval(bmj1(), 30000);
  setInterval(benteng(), 30000);
  setInterval(weather(), 30000);
});