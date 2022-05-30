<div class="modal fade" id="inscription">
                                <div class="modal-dialog modal-dialog-centered ">
                                    <div class="modal-content bg-light">
                                        <div class="modal-header d-flex justify-content-center  ">
                                            <h3 class="text-center">REJOIGNEZ NOUS</h3>

                                        </div>
                                        <div class="modal-body ">
                                            <div class="container-fluid d-flex justify-content-center">

                                                <form action="index.php/?path=main&action=traitement-inscription" method="post" class="d-flex flex-column p-3 mb-5 border border-light rounded shadow-lg">
                                                    <div class="form-group  m-1">
                                                        <div class="row">
                                                            <div class="col"><input minlength="2" pattern="^[a-zA-Z\-]+$" type="text" class="form-control" name="prenom" placeholder="prenom" required="required"></div>
                                                            <div class="col"><input minlength="2" pattern="^[a-zA-Z\-]+$" type="text" class="form-control" name="nom" placeholder="nom" required="required"></div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-1">
                                                        <input minlength="6" type="text" class="form-control" id="pseudo" name="pseudo" placeholder="pseudo" required="required">
                                                    </div>
                                                    <div class="form-group m-1">
                                                        <input type="email" class="form-control" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" name="email" placeholder="Email" required="required">
                                                    </div>
                                                    <div class="form-group m-1">
                                                        <input minlength="8" type="password" class="form-control" name="password" placeholder="Password" required="required">
                                                    </div>
                                                    <div class="form-group m-1">
                                                        <input type="date" class="form-control" id="ageJoeur" name="age" required="required" placeholder="0000-00-00">
                                                    </div>

                                                    <div class="form-group m-1 align-self-center">
                                                        <button type="submit" class="btn btn-primary btn-lg ">Sign Up</button>
                                                    </div>


                                                </form>
                                                <script src="./public/js/veriform.js"></script>
                                            </div>
                                        </div>
                                        <div class="modal-footer bg-light  d-flex justify-content-center">

                                            <button class="btn btn-close bg-danger" type="button" name="button" data-bs-dismiss="modal">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>