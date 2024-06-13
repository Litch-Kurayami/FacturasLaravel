<div class="alert alert-info text-center" style="background-color: #1a1a1a; color: #00ffff; border: 2px solid #00ffff; box-shadow: 0 4px 10px rgba(0, 255, 255, 0.6); font-family: 'Orbitron', sans-serif;">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: #ff00ff; font-size: 1.5rem;">
        <span aria-hidden="true">&times;</span>
    </button>
    <h5 style="margin: 0; color: #00ffff;">{{ \Session::get('mensaje') }}</h5>
</div>

<style>
  .alert-info .close:hover {
    color: #ff00ff;
    text-shadow: 0 0 5px #ff00ff;
  }
</style>
