
<div
class="modal fade"
id="exampleModal"
tabindex="-1"
role="dialog"
aria-labelledby="exampleModalLabel"
aria-hidden="true"
>
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Login</h5>
      <button
        type="button"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
      >
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
      <form id="loginF" enctype="multipart/form-data">
    <input type="hidden" name="action" value="login"/>
    <div class="modal-body">
    <div id="error2"></div>
      <div class="input-group mb-2">
        <div class="input-group-prepend i-log">
          <span class="input-group-text" id="basic-addon1"
            ><i class="fas fa-user i-log"></i
          ></span>
        </div>
        <input
          type="text"
          class="form-control"
          placeholder="Usuario"
          id="usrLogin"
          name="username"
          aria-label="Username"
          aria-describedby="basic-addon1"
          required
        />
      </div>
    </div>
    <div class="modal-body">
      <div class="input-group mb-2">
        <div class="input-group-prepend i-log">
          <span class="input-group-text" id="basic-addon1"
            ><i class="fas fa-key i-log"></i
          ></span>
        </div>
        <input
          type="password"
          name="password"
          class="form-control"
          placeholder="Contraseña"
          id="passLogin"
          aria-label="Username"
          aria-describedby="basic-addon1"
          required
        />
      </div>
    </div>
    <div class="modal-footer">
      <button type="submit" id="login" class="btn btn-Log">
        LogIn
      </button>
    </div>
  </form>
  </div>
</div>
</div>
