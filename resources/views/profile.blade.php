<div id=profile class = "alone bigscreen min-h-screen dark-around dark-around">
    <div class="profile-main animated pulse">
        <div class = "tophat dark-around" >
            <i class = 'sm:mx-5 bi bi-backspace-fill' onclick = "this.closest('#profile').classList.toggle('open');"></i>
            <h4>Profile</h4>
            <i class = 'sm:mx-5 bi bi-brush-fill' onclick = "editEm(event)"></i>
        </div>
        <div class="profile-content">
            <form id = profileForm method = post action="#">
                <img id = "profilePic" src="{{asset('images/4.jpg')}}" alt="">
                <div id =infoProfile>
                <div>
                <label for="name">Username: </label>
                <input value = {{ Auth::user()->name}} type="text" disabled = true>
                </div>
                
                <div>
                <label for="email">Email: </label>
                <input value = {{ Auth::user()->email}} type="text" disabled = true>
                </div>
                
                <div>
                <label for="phone">Phone N<u>o</u>: </label>
                <input class = "edit" id = phone value = '08137457229' type="tel" disabled = true>
                </div>
                
                
                <div>
                <label for="email">Age:</label>
                <input class = "edit" id = email value = {{ Auth::user()->email}} type="text" disabled = true>
                </div>
                
                <div>
                <label for="name">Address: </label>
                <input class = "edit" id = name value = "No 25 Olufemisoro street, Ondo, Ondo State" type="text" disabled = true>
                </div>
                
                <div>
                <label for="email">Nationality:</label>
                <input class = "edit" id = email value = Nigerian type="text" disabled = true>
                </div>
                
                <div>
                <label for="name">Role: </label>
                <input value = "<?php
                
                    if(Auth::user()->load('roles')->roles->pluck('name')->contains('superadmin')){
                        echo 'Super Admin';
                    } else if (Auth::user()->load('roles')->roles->pluck('name')->contains('admin')){
                        echo 'Admin';
                    } else {
                        echo 'user';
                    }
                    ?>"" type="text" disabled = true>
                </div>
                
                <div>
                <label for="bio">Bio:</label>
                <textarea class = "edit" id = bio disabled = true>welcome</textarea>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>