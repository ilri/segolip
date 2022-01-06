<form class="mgBot10" method="POST" action="{{ route('search-users') }}">
                        @csrf
                          <div class="form-row align-items-center">
                            <div class="col-md-11 mb-2"> 
                              <input type="text" class="form-control" name="search" placeholder="Search user, use name or email">
                            </div>  
                            <div class="col-auto mb-2">
                              <button type="submit" class="btn btn-success">Search</button>
                            </div>
                          </div>
                    </form>