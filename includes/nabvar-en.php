<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" aria-current="page" href=""><img src="/includes/img/home-tools-1.png" style="width: 80px;height:60px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" href="https://calcular-porcentajes.com/en/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/en/theory/calculate-percentage-examples">Theory and examples</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://calcularlo.com/">Online calculator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://play.google.com/store/apps/details?id=com.calculadoradeporcentajes">Download App</a>
          </li>
        </ul>
  <select name="idiomas" id="idiomas" class="form-select form-control" aria-label="Default" style="max-width: 200px;">
  <option selected>Language</option>
  <option value="2" selected>English</option>
  <option value="1">Spanish</option>
</select>
      </div>
    </div>
  </nav>
</header>
<script>
 var select = document.getElementById('idiomas');
select.addEventListener('change',
  function(){
    var selectedOption = this.options[select.selectedIndex];
    if (selectedOption.value==1){
    window.location.href="https://calcular-porcentajes.com/";
  }else if(selectedOption.value==2){
    window.location.href="https://calcular-porcentajes.com/en/";
  }
  });
</script>