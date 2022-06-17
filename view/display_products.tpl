<div class="col">
        <div class="card h-100">
        <div class="col-md-4">
      <img src="/dailycart3/{$value.imagePath}" class="img-fluid rounded-start" alt="...">
    </div>
          <div class="card-body">
              
            <h5 class="card-title">{$value.name}</h5>
            <p class="card-text">{$value.description}</p>
            <p class="card-text">{$value.price}</p>

        <a href="{$editUrl}" class="btn btn-primary"> Edit </a>
        <a href="{$url}" class="btn btn-danger"> Delete </a>
            
        </form>
          </div>
        </div>
</div>