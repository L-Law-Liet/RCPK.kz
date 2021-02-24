<style>

    /* Style the buttons inside the tab */
    .tab button {
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
</style>

{{--App Modal--}}
<div class="modal_gov modal_code_gov">
    <div class="fullScreen flex-center p-0">
        <div class="modal__box__gov row"
             style="background: white; width: 100%; height: 100vh; margin: 0 11rem;">
            <div class="col-md-6">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'London')">London</button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
                    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
                </div>

                <div id="London" class="tabcontent">
                    <h3>London</h3>
                    <p>London is the capital city of England.</p>
                </div>

                <div id="Paris" class="tabcontent">
                    <h3>Paris</h3>
                    <p>Paris is the capital of France.</p>
                </div>

                <div id="Tokyo" class="tabcontent">
                    <h3>Tokyo</h3>
                    <p>Tokyo is the capital of Japan.</p>
                </div>
                <div class="h-100 w-25"></div>
            </div>
            <div class="col-md-6">
                <div class="p-3">
                    <button class="modal__close__gov" style="float: right">X</button>
                </div>
                <div>
                    <h2>Қазақстан Республикасы Энергетика министрлігі</h2>
                    <a href="#">href</a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolorum eum fugiat itaque libero placeat voluptas! Fuga, fugit reprehenderit? Aliquid aperiam assumenda id impedit libero nisi non quas rem sit vero. Dolorum eos et eveniet exercitationem, expedita fugit inventore iure laboriosam necessitatibus nisi, non quos reiciendis, rem reprehenderit sunt temporibus.
                    </p>
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
</script>
