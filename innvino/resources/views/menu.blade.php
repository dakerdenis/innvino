@extends('layouts.app')

@section('content')
    <div class="menu_wrapper">
        <div class="menu__container">

            <div class="menu__navigation">
                <div class="menu__language">
                    AZ
                </div>
            </div>

            <div class="menu__food-container">
                <div class="food__tabulator tab">
                    <button class="tablinks" onclick="openCity(event, 'main')" id="defaultOpen">All</button>
                    <button class="tablinks" onclick="openCity(event, 'salat')">Main</button>
                    <button class="tablinks" onclick="openCity(event, 'drinks')">Salats</button>
                    <button class="tablinks" onclick="openCity(event, 'drinks')">Pasta</button>
                </div>

                <div class="food__elements">
                    <div id="main" class="tabcontent">
                        <h3>main</h3>
                        <p>London is the capital city of England.</p>
                      </div>
                      
                      <div id="salat" class="tabcontent">
                        <h3>salat</h3>
                        <p>Paris is the capital of France.</p> 
                      </div>
                      
                      <div id="drinks" class="tabcontent">
                        <h3>drinks</h3>
                        <p>Tokyo is the capital of Japan.</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>
@endsection
