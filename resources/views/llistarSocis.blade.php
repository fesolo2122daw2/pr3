<table class="table">
    <thead>
        <tr class="table-primary">
          <td># ID</td>
          <td>Nom</td>
          <td>Cognoms</td>
          <td>Email</td>
        </tr>
    </thead>
    <tbody>
        @foreach($soci as $soc)
        <tr>
            <td>{{$soc->id}}</td>
            <td>{{$soc->nom}}</td>
            <td>{{$soc->cognomsl}}</td>
            <td>{{$soc->email}}</td>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
