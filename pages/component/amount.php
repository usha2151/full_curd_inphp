 <div class="button-add-student">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" onclick="getBuiltyUpdateForm()">add amount</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Amount</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" action="addamount.php">
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="name">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">PaymentSchedule:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="payment">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">BillNumber:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="bill">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">AmountPaid:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="amount">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">BalanceAmount:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="balance">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Date:</label>
                                    <input type="date" class="form-control" id="recipient-name" name="date">
                                  </div>
                                  <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">add amount</button>
                              </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
