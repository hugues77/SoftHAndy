        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <!-- traitement avec javascript -->
        <script type="text/javascript">
            
            function toggleMenu (){
                
                const menuToggle = document.querySelector('.toggle');
                const navigation = document.querySelector('.navigation');
                menuToggle.classList.toggle('active');
                navigation.classList.toggle('active');
            }
            function videoToggle(){
                const trailler = document.querySelector('.trailler');
                const video = document.querySelector('.video');
                trailler.classList.toggle('active');
                video.currentTime = 0;
                video.pause();
            }
            function contact(){
                const contact = document.querySelector('.contact');
                contact.classList.toggle('active');
                toggleMenu();
                
            }
            
        </script>
    </body>
</html>