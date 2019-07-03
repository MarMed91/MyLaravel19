<script type="text/x-template" id="post-card">
  <div class="card" v-show ="!deleted">
    <div class="card-header">
      <i class="fa fa-trash-alt" @click="destroy()"></i>
      <i class="fa fa-edit" @click="update()"></i>
        <h1 class="card-header-title">@{{ title }}</h1>
    </div>
    <div id="app-2">
      <span v-bind:title="message"></span>
    </div>
    <div class="card-content">
      <p class="card-content-text">@{{ author }}</p>
      <p class="card-content-text">@{{ content }}</p>
      <p class="card-content-text">@{{ categories }}</p>
    </div>
    <div class="card-footer">
      <p class="card-footer-text">@{{ updated_at }}</p>
      <div @click="setLiked()"> {{--aggiunto evento click e associato a questa funzione in JS--}}
        @{{ postLikes }}
        <i class="fa-heart" v-bind:class="hearticon"></i> {{--permette di modificare icona cliccando dinamicamente, la computed hearticon ci ritorna qualcosa che dovrà  finire nella classe--}}
      </div>
    </div>
  </div>
</script>
