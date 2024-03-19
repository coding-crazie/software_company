var sampleChartClass;
(function($){
  $(document).ready(function(){
    var labels=Object.keys(payment_history);
    var data=Object.values(payment_history);


  
   





  
    var ctx = document.getElementById('transaction-history').getContext('2d');
    sampleChartClass.ChartData(ctx,'doughnut',labels,data)


  });
  sampleChartClass={
    ChartData:function(ctx,type,labels,data){
      new Chart(ctx, {
        type: type,
        data: {
          labels: labels,
          datasets: [{
            data:data,
            backgroundColor: [
              "#111111","#00d25b","#ffab00"
            ]
          }
        ]
        },
        options: {
          animations: {
            tension: {
              duration: 1000,
              easing: 'linear',
              from: 1,
              to: 0,
              loop: true
            }
          },
        
        }
     
      }
      );
    }
    }
    })(jQuery)



 
      


function logout(){
window.location.href = '/logout';
}

function clients(){
window.location.href = '/My-Clients';
}
function password(){
window.location.href = '/forget-password';
}

function tickets(){
window.location.href = '/My-Tickets';
}
  

                                        