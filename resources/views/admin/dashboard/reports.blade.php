<h3>
  <i class="fa fa-user-circle"></i> Users
</h3>
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-primary bg-huntergreen">
      <div class="inner">
        <h3>{{ count($admins) }}</h3>
        <p>{{ count($admins) <= 1 ? 'Admin': str_plural('Admin') }}</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-lock"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-primary bg-treemoss">
      <div class="inner">
        <h3>{{ count($headTeachers) }}</h3>
        <p>{{ count($headTeachers) <= 1 ? 'Head Teacher': str_plural('Head Teacher') }}</p>
      </div>
      <div class="icon">
        <i class="fas fa-chalkboard-teacher"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-primary bg-mediumseagreen">
      <div class="inner">
        <h3>{{ count($faculties) }}</h3>
        <p>{{ count($faculties) <= 1 ? 'Faculty': str_plural('Faculty') }}</p>
      </div>
      <div class="icon">
        <i class="fas fa-chalkboard"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-primary bg-forestgreen" style="background-color: yellow">
      <div class="inner">
        <h3>{{ count($registrars) }}</h3>
        <p>{{ count($registrars) <= 1 ? 'Registrar': str_plural('Registrar') }}</p>
      </div>
      <div class="icon">
        <i class="fas fa-user"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-primary bg-parisgreen">
      <div class="inner">
        <h3>{{ count($cashiers) }}</h3>
        <p>{{ count($cashiers) <= 1 ? 'Cashier': str_plural('Cashier') }}</p>
      </div>
      <div class="icon">
        <i class="fas fa-cash-register"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-primary bg-limegreen">
      <div class="inner">
        <h3>{{ count($students) }}</h3>
        <p>{{ count($students) <= 1 ? 'Student': str_plural('Student') }}</p>
      </div>
      <div class="icon">
        <i class="fas fa-users"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>