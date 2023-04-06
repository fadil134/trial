<?php include 'session.php'; ?>
<?php include 'product.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Dashboard</title>

    <!-- Bootstrap Default -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/dist/js/chart/chart.umd.js"></script>

    <!-- Data Table Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.6.2/js/dataTables.select.min.js"></script>
    <script src="assets/DataTables/datatables.min.js"></script>


    <!-- Data Table Style -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.6.2/css/select.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/DataTables/datatables.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.9/gmaps.min.js" integrity="sha512-7L86NChc+1jvCKJVMLGnoQLA9QQXVcBvWyr37YaVau42A6zWacZ/ew7EX2eag+ruzEVKeqdLS0pSYgj1yagegA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Avestan&display=swap');
    </style>
    <script>
      $(document).ready(function() {
        $('table,#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
            'csv'
            ],
            responsive: true,
            select: false,
          } );
      } );
      </script>
    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
  </head>
  <body style="font-family: 'Noto Sans Avestan', sans-serif;">
    <!-- Symbol SVG -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="update" viewbox="0 0 16 16">
        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0Z"/>
        <path d="M12.096 6.223A4.92 4.92 0 0 0 13 5.698V7c0 .289-.213.654-.753 1.007a4.493 4.493 0 0 1 1.753.25V4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.525 4.525 0 0 1-.813-.927C8.5 14.992 8.252 15 8 15c-1.464 0-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13h.027a4.552 4.552 0 0 1 0-1H8c-1.464 0-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10c.262 0 .52-.008.774-.024a4.525 4.525 0 0 1 1.102-1.132C9.298 8.944 8.666 9 8 9c-1.464 0-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777ZM3 4c0-.374.356-.875 1.318-1.313C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4Z"/>
      </symbol>
      <symbol id="add" viewbox="0 0 16 16">
        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0ZM8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1Z"/>
        <path d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12.31 12.31 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7Zm6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.552 4.552 0 0 1 .23-2.002Zm-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.507 4.507 0 0 1-1.3-1.905Z"/>
      </symbol>
      <symbol id="hapus" viewbox="0 0 16 16">
        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7ZM11 12h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1Z"/>
        <path d="M12.096 6.223A4.92 4.92 0 0 0 13 5.698V7c0 .289-.213.654-.753 1.007a4.493 4.493 0 0 1 1.753.25V4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.525 4.525 0 0 1-.813-.927C8.5 14.992 8.252 15 8 15c-1.464 0-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13h.027a4.552 4.552 0 0 1 0-1H8c-1.464 0-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10c.262 0 .52-.008.774-.024a4.525 4.525 0 0 1 1.102-1.132C9.298 8.944 8.666 9 8 9c-1.464 0-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777ZM3 4c0-.374.356-.875 1.318-1.313C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4Z"/>
      </symbol>
      <symbol id="bootstrap" viewBox="0 0 16 16">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm8 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zm-13.5.5a.5.5 0 0 0 0-1h-2a.5.5 0 0 0 0 1h2zm11.157-6.157a.5.5 0 0 1 0 .707l-1.414 1.414a.5.5 0 1 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm-9.9 2.121a.5.5 0 0 0 .707-.707L3.05 5.343a.5.5 0 1 0-.707.707l1.414 1.414zM8 7a4 4 0 0 0-4 4 .5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5 4 4 0 0 0-4-4z"/>
      </symbol>
      <symbol id="home" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
      </symbol>
      <symbol id="speedometer2" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
      </symbol>
      <symbol id="table" viewBox="0 0 16 16">
        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
      </symbol>
      <symbol id="people-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </symbol>
      <symbol id="grid" viewBox="0 0 16 16">
        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
      </symbol>
      <symbol id="collection" viewBox="0 0 16 16">
        <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"/>
      </symbol>
      <symbol id="calendar3" viewBox="0 0 16 16">
        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </symbol>
      <symbol id="chat-quote-fill" viewBox="0 0 16 16">
        <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
      </symbol>
      <symbol id="cpu-fill" viewBox="0 0 16 16">
        <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
        <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z"/>
      </symbol>
      <symbol id="gear-fill" viewBox="0 0 16 16">
        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
      </symbol>
      <symbol id="speedometer" viewBox="0 0 16 16">
        <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
        <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
      </symbol>
      <symbol id="toggles2" viewBox="0 0 16 16">
        <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z"/>
        <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z"/>
        <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"/>
      </symbol>
      <symbol id="tools" viewBox="0 0 16 16">
        <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
      </symbol>
      <symbol id="logout" viewbox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
      </symbol>
      <symbol id="chevron-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
      </symbol>
      <symbol id="geo-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
      </symbol>
      <symbol id="stack" viewbox="0 0 16 16">
        <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
        <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>        
      </symbol>
    </svg>
    <div class="container-fluid">
      <div class="d-flex flex-row">
        <div class="align-self-start mt-5 position-sticky top-0 text-white">
          <div class="bg-dark bg-gradient flex-no-wrap mt-5" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="width:210px; height:450px; border-radius: 15px 0px 0px 15px; box-shadow: 0 0 30px #897E77;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto ms-2 text-white text-decoration-none">
              <svg class="bi pe-none mt-3" width="50" height="52"><use xlink:href="#stack"/></svg>
              <span class="fs-4 ms-3 mt-3">Dashboard</span>
            </a>
            <hr>
              <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                  <a href="#v-pills-dashboard" class="nav-link active text-white text-nowrap" id="v-pills-dashboard-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="v-pills-dashboard" aria-selected="true" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>Dashboard
                  </a>
                </li>
                <li>
                  <a href="#v-pills-home" class="nav-link text-white text-nowrap" id="v-pills-home-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>Home
                  </a>
                </li>
                <li>
                  <a href="#v-pills-messages" class="nav-link text-white text-nowrap" id="v-pills-messages-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"/></svg>Message
                  </a>
                </li>
                <li>
                  <a href="#v-pills-settings" class="nav-link text-white text-nowrap" id="v-pills-settings-tab" data-bs-toggle="pill" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg>Products
                  </a>
                </li>
              </ul>
              <hr>
              <ul class="nav nav-pills flex-column mb-auto">
                <li>
                  <a href="logout.php" class="nav-link text-white text-nowrap" id="v-pills-settings-tab" type="button" aria-controls="v-pills-settings">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#logout"/></svg>Log Out
                  </a>
                </li>
              </ul>
          </div>
        </div>
        <div class="ms-3 me-3 vr sticky-top" style="height: 100vh;"></div>
        <div class="container tab-content d-flex flex-column" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab" tabindex="0">
            <hr class="border border-danger border-1 opacity-35">
            <div class="bg-body-tertiary" style="border-radius: 10px">
              <canvas class="m-4" id="myChart" class="pe-3"></canvas>
            </div>
            <div class="sticky-top mt-5 bg-white">
              <ul class="nav nav-tabs">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" type="button" data-bs-toggle="tab" aria-current="page" href="#table1">Node Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" type="button" data-bs-toggle="tab" aria-current="page" href="#table2">CMTS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" type="button" data-bs-toggle="tab" aria-current="page" href="#table3">Add Data</a>
                </li>
              </ul>
              <hr class="border border-danger border-1 opacity-35">
            </div>
            <div class="tab-content">
              <div class="tab-pane fade show active bg-body-tertiary" id="table1" style="border-radius: 10px">
                <table class="table h-100vh table-bordered table-hover" id="example" style="border-radius: 10px">
                  <thead class="table-primary" style="position: sticky; top: 20px;">
                    <tr>
                      <th class="text-center align-middle text-nowrap fs-7">Kode Node</th>
                      <th class="text-center align-middle text-nowrap fs-7">Kelurahan</th>
                      <th class="text-center align-middle text-nowrap fs-7">Kode Pos</th>
                      <th class="text-center align-middle text-nowrap fs-7">Maps Koordinat</th>
                      <th class="text-center align-middle text-nowrap fs-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = mysqli_query($conn,'SELECT node_addr.Node_Code, node_addr.District, node_addr.Postal, node_loc.Link_Tikor FROM node_addr INNER JOIN node_loc ON node_addr.Node_Code=node_loc.Node_Code');
                    while ($baris = mysqli_fetch_assoc($sql)) { ?>
                    <tr>
                      <td class="align-middle text-nowrap text-center"><?php echo $baris['Node_Code']; ?></td>
                      <td class="align-middle text-nowrap" id="desa" name="desa"><?php echo $baris['District']; ?></td>
                      <td class="align-middle text-nowrap text-center" id="post" name="post"><?php echo $baris['Postal']; ?> </td>
                      <td class="align-middle text-nowrap" id="tIkor" name="tikor"><a href="<?php echo $baris['Link_Tikor']; ?>" target="blank"><?php echo $baris['Link_Tikor'] ?></a></td>
                      <td>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                          <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalUpdate<?php echo $baris['Node_Code']?>">
                            <svg class="bi pe-none text-dark" width="16" height="16"><use xlink:href="#update"/></svg>
                          </button>
                          <button class="btn btn-outline-danger" type="button" data-bs-toggle="modal" data-bs-target="#modalDelete<?php echo $baris['Node_Code']?>">
                            <svg class="bi pe-none text-dark" width="16" height="16"><use xlink:href="#hapus"/></svg>
                          </button>
                        </div>
                      </td>
                    </tr>
                      <!-- Modal Update -->
                    <div class="modal fade" id="modalUpdate<?php echo $baris['Node_Code'] ?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Update Data Node <?php echo $baris['Node_Code'] ?>
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="fungsi/update.php" method="post" class="needs-validation" novalidate>
                              <div class="row g-3 mb-3">
                                <div class="col-sm-4">
                                  <label for="nodekode" class="form-label">Node Kode</label>
                                  <input type="text" class="form-control" value="<?php echo $baris['Node_Code'] ?>" name="node">
                                </div>
                                <div class="col-sm-4">
                                  <label for="keluarahan" class="form-label">Kelurahan</label>
                                  <input type="text" class="form-control" value="<?php echo $baris['District'] ?>" name="desa">
                                </div>
                                <div class="col-4">
                                  <label for="post" class="form-label">Postal Kode</label>
                                  <input type="text" class="form-control" value="<?php echo $baris['Postal'] ?>" name="post">
                                </div>
                                <div class="col-12">
                                  <label for="tikor" class="form-label">Tikor</label>
                                  <input type="text" class="form-control" value="<?php echo $baris['Link_Tikor'] ?>" name="tikor">
                                </div>
                              </div>
                              <button name="hapus" class="btn btn-primary" type="submit">Save Changes</button>
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                      <!-- Modal Delete -->
                    <div class="modal fade" id="modalDelete<?php echo $baris['Node_Code'] ?>" aria-hidden="false" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-4 text-danger" id="exampleModalToggleLabel">Delete Data Node <?php echo $baris['Node_Code'] ?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="fungsi/delete.php" method="post" class="needs-validation" novalidate>
                              <p class="fs-6 text-center" name="node">Dialog Modal ini muncul untuk mengkonfirmasi tindakan penghapusan data node <?php echo $baris['Node_Code'] ?>
                                <input  hidden name="node" value="<?php echo $baris['Node_Code'] ?>">, silahkan click button Delete untuk melanjutkan, hanya sebagai reminder, data yang sudah di hapus tidak bisa di restore
                              </p>
                              <div class="modal-footer">
                                <button name="hapus" class="btn btn-primary" type="submit">Delete</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php }; ?>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade bg-body-tertiary p-3" id="table2" style="border-radius: 10px">
              <div class="tab-pane fade show active bg-body-tertiary" id="table2" style="border-radius: 10px">
        <table class="table h-100vh table-bordered table-hover" id="example" style="border-radius:10px">
          <thead class="table-primary" style="position: sticky; top: 20px">
            <tr>
              <th class="text-center align-middle text-nowrap fs-7">Kode Node</th>
              <th class="text-center align-middle text-nowrap fs-7">CMTS</th>
              <th class="text-center align-middle text-nowrap fs-7">PORT DS</th>
              <th class="text-center align-middle text-nowrap fs-7">FREQ DS</th>
              <th class="text-center align-middle text-nowrap fs-7">OTP 1000 (dB)</th>
              <th class="text-center align-middle text-nowrap fs-7">OTP 2000 (dB)</th>
              <th class="text-center align-middle text-nowrap fs-7">PRISMA II (dB)</th>
              <th class="text-center align-middle text-nowrap fs-7">TX Rack No.</th>
              <th class="text-center align-middle text-nowrap fs-7">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $cmts = mysqli_query($conn,'SELECT * FROM ceklis');
            while ($row = mysqli_fetch_array($cmts)) { ?>
            <tr>
              <td class="align-middle text-nowrap"><?php echo $row['node']; ?></td>
              <td class="align-middle text-nowrap"><?php echo $row['name']; ?></td>
              <td class="align-middle text-nowrap"><?php echo $row['port_ds']; ?> </td>
              <td class="align-middle text-nowrap"><?php echo $row['freq_ds'] ?></td>
              <td class="align-middle text-nowrap"><?php echo $row['otp1000_db'] ?></td>
              <td class="align-middle text-nowrap"><?php echo $row['otp2000_db'] ?></td>
              <td class="align-middle text-nowrap"><?php echo $row['prisma_II_db'] ?></td>
              <td class="align-middle text-nowrap"><?php echo $row['tx_no'] ?></td>
              <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                  <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalUpdatecmts<?php echo $row['node']?>">
                    <svg class="bi pe-none text-dark" width="16" height="16"><use xlink:href="#update"/></svg>
                  </button>
                  <button class="btn btn-outline-danger" type="button" data-bs-toggle="modal" data-bs-target="#modalDeletecmts<?php echo $row['node']?>">
                    <svg class="bi pe-none text-dark" width="16" height="16"><use xlink:href="#hapus"/></svg>
                  </button>
                </div>
              </td>
            </tr>
            <?php }; ?>
          </tbody>
        </table>
    </div>
    <?php
            $cmts = mysqli_query($conn,'SELECT * FROM ceklis');
            while ($row = mysqli_fetch_array($cmts)) { ?>
    <div class="modal fade" id="modalUpdatecmts<?php echo $row['node'] ?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Update Data Node <?php echo $row['node'] ?>
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="fungsi/cmts_update.php" method="post" class="needs-validation text-center" novalidate>
              <div class="row g-3 mb-3">
                <div class="col-sm-4">
                  <label for="nodekode" class="form-label">Node Kode</label>
                  <input type="text" class="form-control" value="<?php echo $row['node'] ?>" name="node">
                </div>
                <div class="col-sm-4">
                  <label for="cmts" class="form-label">CMTS</label>
                  <input type="text" class="form-control" value="<?php echo $row['name'] ?>" name="cmts">
                </div>
                <div class="col-4">
                  <label for="port_ds" class="form-label">PORT DS</label>
                  <input type="text" class="form-control" value="<?php echo $row['port_ds'] ?>" name="port_ds">
                </div>
                <div class="col-4">
                  <label for="otp1000_dB" class="form-label">OTP 1000 (dB)</label>
                  <input type="text" class="form-control" value="<?php echo $row['otp1000_db'] ?>" name="otp1000_dB">
                </div>
                <div class="col-4">
                    <label for="otp2000_db" class="form-label">OTP 2000 (dB)</label>
                    <input type="text" class="form-control" value="<?php echo $row['otp2000_db'] ?>" name="otp2000_db">
                </div>
                <div class="col-4">
                    <label for="prisma_II_db" class="form-label">PRISMA II (dB)</label>
                    <input type="text" class="form-control" value="<?php echo $row['prisma_II_db'] ?>" name="prisma_II_db">
                </div>
                <div class="col-4">
                    <label for="tx_no" class="form-label">Tx Rack No.</label>
                    <input type="text" class="form-control" value="<?php echo $row['tx_no'] ?>" name="tx_no">
                </div>
              </div>
              <button name="hapus" class="btn btn-primary" type="submit">Save Changes</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>
      <!-- Modal Delete -->
    <div class="modal fade" id="modalDeletecmts<?php echo $row['node'] ?>" aria-hidden="false" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-4 text-danger" id="exampleModalToggleLabel">Delete Data Node <?php echo $row['node'] ?></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="fungsi/deletecmts.php" method="post" class="needs-validation" novalidate>
              <p class="fs-6 text-center" name="node">Dialog Modal ini muncul untuk mengkonfirmasi tindakan penghapusan data node <?php echo $row['node'] ?>
                <input  hidden name="node" value="<?php echo $row['node'] ?>">, silahkan click button Delete untuk melanjutkan, hanya sebagai reminder, data yang sudah di hapus tidak bisa di restore
              </p>
              <div class="modal-footer">
                <button name="hapus" class="btn btn-primary" type="submit">Delete</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php }; ?>
              </div>
              <div class="tab-pane fade bg-body-tertiary p-3" id="table3" style="border-radius: 10px">
                Table3
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">1
          </div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">2
          </div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">3
          </div>
        </div>
      </div>
    </div>
        <!-- End Sidebar Content -->
      <script>
        var ctx = document.getElementById("myChart").getContext("2d");
        var myChart = new Chart(ctx, {
          type: "bar",
          data: <?php echo $chart_data; ?>,
          options: {
          responsive: true,
          plugins: {
            legend: {
              display: false,
            },
            title: {
              display: true,
              text: 'Sebaran Node HUB Pasar Kemis'
            }
          }
        }
        })
      </script>
  </body>
</html>