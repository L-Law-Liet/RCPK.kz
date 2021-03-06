<div class="panel d-flex align-items-center">
@auth
        <a href="{{route('cabinet')}}" class="panel__item d-flex align-items-center"><i class="panel__icon">
                <svg version="1.1" width="16" height="16" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 513.323 513.323">
                    <path d="M256.661,257.323c-135.275,0-245.333,110.059-245.333,245.333c0,5.888,4.779,10.667,10.667,10.667
                    s10.667-4.779,10.667-10.667c0-123.52,100.48-224,224-224s224,100.48,224,224c0,5.888,4.779,10.667,10.667,10.667
                    c5.888,0,10.667-4.779,10.667-10.667C501.995,367.36,391.936,257.323,256.661,257.323z"/>
                    <path d="M256.661,0c-64.683,0-117.333,52.629-117.333,117.333s52.651,117.333,117.333,117.333s117.333-52.629,117.333-117.333
                    S321.344,0,256.661,0z M256.661,213.333c-52.928,0-96-43.072-96-96s43.072-96,96-96c52.928,0,96,43.072,96,96
                    S309.589,213.333,256.661,213.333z"/>
                </svg>
            </i>Кабинет</a>
        <a href="{{route('logout')}}" class="panel__item d-flex align-items-center"><i class="panel__icon">
                <svg viewBox="0 0 74 74" width="19" height="19" xmlns="http://www.w3.org/2000/svg"><path d="m50.235 62h-47.235a1 1 0 0 1 -1-1v-.654a30.321 30.321 0 0 1 22.85-29.429l.492 1.938a28.321 28.321 0 0 0 -21.342 27.145h46.235z"/><path d="m58.835 50.122a28.457 28.457 0 0 0 -19.443-17.266l.492-1.938a30.46 30.46 0 0 1 20.816 18.482z"/><path d="m32.369 34.743a16.146 16.146 0 1 1 16.146-16.143 16.164 16.164 0 0 1 -16.146 16.143zm0-30.292a14.146 14.146 0 1 0 14.146 14.149 14.162 14.162 0 0 0 -14.146-14.149z"/><path d="m60.578 71.549a11.412 11.412 0 1 1 11.422-11.412 11.425 11.425 0 0 1 -11.422 11.412zm0-20.824a9.412 9.412 0 1 0 9.422 9.412 9.422 9.422 0 0 0 -9.422-9.411z"/><path d="m59.583 55.124h2v10.026h-2z"/><path d="m55.57 59.137h10.026v2h-10.026z"/></svg>
            </i>Выйти</a>
@endauth
@guest
        <a href="{{route('login')}}" class="panel__item d-flex align-items-center"><i class="panel__icon">
                <svg version="1.1" width="16" height="16" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 513.323 513.323">
                    <path d="M256.661,257.323c-135.275,0-245.333,110.059-245.333,245.333c0,5.888,4.779,10.667,10.667,10.667
                    s10.667-4.779,10.667-10.667c0-123.52,100.48-224,224-224s224,100.48,224,224c0,5.888,4.779,10.667,10.667,10.667
                    c5.888,0,10.667-4.779,10.667-10.667C501.995,367.36,391.936,257.323,256.661,257.323z"/>
                    <path d="M256.661,0c-64.683,0-117.333,52.629-117.333,117.333s52.651,117.333,117.333,117.333s117.333-52.629,117.333-117.333
                    S321.344,0,256.661,0z M256.661,213.333c-52.928,0-96-43.072-96-96s43.072-96,96-96c52.928,0,96,43.072,96,96
                    S309.589,213.333,256.661,213.333z"/>
                </svg>
            </i>Вход</a>
        <a href="{{route('registration')}}" class="panel__item d-flex align-items-center"><i class="panel__icon">
                <svg viewBox="0 0 74 74" width="19" height="19" xmlns="http://www.w3.org/2000/svg"><path d="m50.235 62h-47.235a1 1 0 0 1 -1-1v-.654a30.321 30.321 0 0 1 22.85-29.429l.492 1.938a28.321 28.321 0 0 0 -21.342 27.145h46.235z"/><path d="m58.835 50.122a28.457 28.457 0 0 0 -19.443-17.266l.492-1.938a30.46 30.46 0 0 1 20.816 18.482z"/><path d="m32.369 34.743a16.146 16.146 0 1 1 16.146-16.143 16.164 16.164 0 0 1 -16.146 16.143zm0-30.292a14.146 14.146 0 1 0 14.146 14.149 14.162 14.162 0 0 0 -14.146-14.149z"/><path d="m60.578 71.549a11.412 11.412 0 1 1 11.422-11.412 11.425 11.425 0 0 1 -11.422 11.412zm0-20.824a9.412 9.412 0 1 0 9.422 9.412 9.422 9.422 0 0 0 -9.422-9.411z"/><path d="m59.583 55.124h2v10.026h-2z"/><path d="m55.57 59.137h10.026v2h-10.026z"/></svg>
            </i>Регистрация</a>
@endguest
    </div>
