<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PruebaTessi</title>
        <script src="https://kit.fontawesome.com/ba6fb542e0.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md">
                    <div class="card">
                        <div class="card-header">LISTADO DE EMPLEADOS</div>
        
                        <div class="card-body py-3">
                            <table id="listaEmpleados" class="table display responsive nowrap">
                                <thead class="thead-dark">
                                    <tr>
                                        <th ></th>
                                        <th >Name</th>
                                        <th >Email</th>
                                        <th >Position</th>
                                        <th >Salary</th>
                                        <th >More</th>
                                    </tr>
                                </thead>
                                <tbody style="color:black"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="modalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Información Total del Empleado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="contenidoModalEdicion">
                        <div class="card-body py-3">
                            <div class="mb-3">
                                <input type="text" id="id" name="id" hidden>
                                <div class="container">
                                    <div class="row align-items-start">
                                        <div class="col">
                                            Name: 
                                        </div>
                                        <div class="col" id="name"></div>
                                    </div>
                                    <div class="row align-items-start">
                                        <div class="col">
                                            Email: 
                                        </div>
                                        <div class="col" id="email"></div>
                                    </div>
                                    <div class="row align-items-start">
                                        <div class="col">
                                            Phone: 
                                        </div>
                                        <div class="col" id="phone"></div>
                                    </div>
                                    <div class="row align-items-start">
                                        <div class="col">
                                            Address: 
                                        </div>
                                        <div class="col" id="address"></div>
                                    </div>
                                    <div class="row align-items-start">
                                        <div class="col">
                                            Position: 
                                        </div>
                                        <div class="col" id="position"></div>
                                    </div>
                                    <div class="row align-items-start">
                                        <div class="col">
                                            Salary: 
                                        </div>
                                        <div class="col" id="salary"></div>
                                    </div>
                                    <div class="row align-items-start">
                                        <div class="col">
                                            Skills: 
                                        </div>
                                        <div class="col" id="skills"></div>
                                    </div>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="{{asset('js/home.js')}}"></script>
</html>
