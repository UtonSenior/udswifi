        <div class="text-white -dark bg-primary footer-clean <?php if($page == 'login' || $exist == 1 || $contactsuccess == true){ echo 'fixed-bottom'; }?>">
            <footer style="background-color:black">
                <div class="container">
                    <div class="footer-dark row justify-content-center py-3">
                        <?php                     
                            echo "Copyright &copy; UDS WIFI 2008 - " . date("Y") . "";                
                        ?>
                    </div>
                </div>
            </footer>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- MDBootstrap Datatables  -->
        <script type="text/javascript" src="script/datatables.min.js"></script>
        <script type="text/javascript" src="script/scripts.js"></script>

    </body>
</html>