
  <style>
    html {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
    }

    body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      position: absolute;
      left: 0;
      
    }
    .blooming-menu__container{
      margin-top: -730px;
      font-size: 32px;
    line-height: -42;
    position: relative;
    }
    

    .blooming-menu__item-btn{
      background-color: #ff00aeb5;
    }
    .blooming-menu__item-btn{
      width: 45px;
      height: 45px;
    }

    body .blooming-menu__container {
      left: 50px;
     
      top: auto;
      position: absolute;
    }

    .blooming-menu__item:nth-of-type(1) .blooming-menu__item-btn {
      background-image: url(https://www.flaticon.com/premium-icon/icons/svg/1892/1892465.svg);
      background-size: 100%;
    }

    .blooming-menu__item:nth-of-type(2) .blooming-menu__item-btn {
      background-image: url("../hardware/img/gpu.png");
      background-size: 100%;
    }

    .blooming-menu__item:nth-of-type(3) .blooming-menu__item-btn {
      background-image: url("../hardware/img/ram.png");
      background-size: 100%;
    }

    .blooming-menu__item:nth-of-type(4) .blooming-menu__item-btn {
      background-image: url(https://www.flaticon.com/premium-icon/icons/svg/3826/3826116.svg);
      background-size: 100%;
    }
    .blooming-menu__item:nth-of-type(5) .blooming-menu__item-btn {
      background-image: url(https://www.flaticon.com/premium-icon/icons/svg/4421/4421046.svg);
      background-size: 100%;
    }
    .blooming-menu__item:nth-of-type(6) .blooming-menu__item-btn {
      background-image: url("../hardware/img/hdd.svg");
      background-size: 70%;
    }
    .blooming-menu__item:nth-of-type(7) .blooming-menu__item-btn {
      background-image: url("../hardware/img/mobo.svg");
      background-size: 70%;
    }
    .blooming-menu__item:nth-of-type(8) .blooming-menu__item-btn {
      background-image: url("../hardware/img/case.svg");
      background-size: 70%;
    }

    .blooming-menu__item-btn:hover {
      box-shadow: 0 8px 17px 0 rgba(0,0,0,.2);
      opacity: 1;
    }

/*
    .blooming-menu__items{
      display: none;
    }
*/
    button:focus {
      outline: none !important;
    }

    
  </style>

<section id="catego">
  <script>
    var bloomingMenu = new BloomingMenu({
      startAngle: -90,
      endAngle: 90,
      radius: 100,
      itemsNum: 8,
      itemAnimationDelay: 0.08
    })
    bloomingMenu.render()

    
    document.addEventListener('touchmove', function(event) {
      'use strict'
      event.preventDefault()
    })
  </script>
<!--
  <script> 
  $(document).ready(function(){
  $(".blooming-menu__main").click(function(){
    $(".blooming-menu__items").toggle();
    $(".blooming-menu__main").addClass("is-inactive is-inactive")
  });
});
  </script>-->
</section>


</header>