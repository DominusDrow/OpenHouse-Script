<!--Modal Window form-->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create an Open House</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="modalClose"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
				    <img src="../src/house2.jpg" class="img-fluid" alt="Casa">
          </div>
          <div class="mb-3">
            <label for="mode" class="form-label">Type:</label>
            <select class="form-select" id="mode" name="mode">
              <option value="modo1">Light Registration</option>
              <option value="modo2">Full Registration</option>
              <option value="modo2">Virtual Open House Registration</option>
              <option value="modo2">Light Registration With Comments</option>
              <option value="modo2">Full Registration With Comments</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="fecha" class="form-label">Date:</label>
            <input type="date" class="form-control" id="fecha" name="fecha">
          </div>
          <div class="mb-3">
            <label for="horaInicio" class="form-label">Start Time:</label>
            <input type="time" class="form-control" id="horaInicio" name="horaInicio">
          </div>
          <div class="mb-3">
            <label for="horaFin" class="form-label">End Time:</label>
            <input type="time" class="form-control" id="horaFin" name="horaFin">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Start Open House</button>
      </div>
    </div>
  </div>
</div>


