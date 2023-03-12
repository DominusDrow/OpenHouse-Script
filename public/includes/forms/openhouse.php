<!--Modal Window form-->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content px-5 py-4">
      <div class="modal-header text-center">
        <h3 class="modal-title mx-auto text-secondary" >Create an Open House</h3>
          <button type="button" class="btn-close modalClose" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="openHouseForm">
          <div class="mb-3">
				    <img src="../src/house2.jpg" class="img-fluid" alt="Casa">
          </div>
          <div class="mb-3">
            <label for="mode" class="form-label text-secondary">Registration Form</label>
            <select class="form-select" id="mode" name="mode">
              <option value="modo1">Light Registration</option>
              <option value="modo2">Full Registration</option>
              <option value="modo2">Virtual Open House Registration</option>
              <option value="modo2">Light Registration With Comments</option>
              <option value="modo2">Full Registration With Comments</option>
            </select>
          </div>
          <div class="mb-3">
            <input type="date" class="form-control" id="fecha" name="fecha" required>
          </div>
          <div class="mb-3">
            <label for="horaInicio" class="form-label">Start Time:</label>
            <input type="time" class="form-control" id="horaInicio" name="horaInicio" placeholder="Start Time" required>
          </div>
          <div class="mb-3">
            <label for="horaFin" class="form-label">End Time:</label>
            <input type="time" class="form-control" id="horaFin" name="horaFin" placeholder="End Time" required>
          </div>
        </form>
      </div>
        <div class="row">
          <div class="col text-center">
            <button type="button" class="btn btn-primary" id="startOpenHouse">Start Open House</button>
          </div>
        </div>
    </div>
  </div>
</div>


