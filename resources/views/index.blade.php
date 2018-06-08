<!DOCTYPE html>
<html>
  <head>
    <title>Welcome to HyperDev!</title>
    <meta name="description" content="Shopping and to do lists">
    <link id="favicon" rel="icon" href="https://hyperdev.com/favicon-app.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- <link href="{{ ../public('css/index.css') }}" rel="stylesheet"> -->
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
  </head>
  <body>
    <div class="container">
      <main>
        <section>
          <h2>Shopping list</h2>
          <form id="js-shopping-list-form">
            <label for="shopping-list-entry">Add an item</label>
            <input type="text" name="shopping-list-entry" id="js-new-item" placeholder="e.g., broccoli">
            <button type="submit">Add item</button>
          </form>

          <ul class="shopping-list js-shopping-list">
          </ul>
        </section>
      </main>
    </div>
    <script src="//code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ asset('js/client.js') }}"></script>
  </body>
</html>
