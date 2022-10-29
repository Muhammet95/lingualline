<main>

    <p>Dear {{$offer->user_name}},</p>
    <p>
        @if($offer->status === 'prepare')
            Your file has been accepted. You can learn the status on the link by using the password below. Firstly you will be able to see 5% of the translated document.
        @elseif($offer->status === 'wait_payment')
            5% of the whole file has been translated. You can see it on the link by using the pasword below. If the quality of the translation and the price is satisfactory for you, you are expected to send the remuneration so that the translation process will be continued. You can access the whole translated file in maximum 5 hours.
        @elseif($offer->status === 'translating')
            Your payment has been delivered. The translated file will be submitted in maximum 5 hours.
        @elseif($offer->status === 'completed')
            Your document has been completely translated. You can access your file on the link by using the password below. Happy to work with you.
        @elseif($offer->status === 'cancel')
            We are sorry that the translation process has been canceled. Your order is out of our services. <br>
            Thank you for your understanding.
        @endif
    </p>
    The link: <br>
    <a href="{{url('/check')}}">{{url('/check')}}</a>
    <br>
    The password: <br>
    {{$offer->uuid}} <br><br>
    Have a good day. <br>
    Kind regards. <br>

    <i>lingualline</i><br><br>


    <p>Уважаемый / Уважаемая {{$offer->user_name}},</p>
    <p>
        @if($offer->status === 'prepare')
            Ваш файл принят. Вы можете узнать статус по ссылке, используя пароль ниже. Сначала вы сможете увидеть 5% переведенного документа.
        @elseif($offer->status === 'wait_payment')
            5% всего файла переведено. Вы можете увидеть это по ссылке, используя пароль ниже. Если качество перевода и цена вас устраивают, отправьте вознаграждение, чтобы процесс перевода был продолжен. Вы можете получить доступ ко всему переведенному файлу максимум через 5 часов.
        @elseif($offer->status === 'translating')
            Ваш платеж доставлен. Переведенный файл будет отправлен максимум через 5 часов.
        @elseif($offer->status === 'completed')
            Ваш документ полностью переведен. Вы можете получить доступ к своему файлу по ссылке, используя пароль ниже. Рад работать с вами.
        @elseif($offer->status === 'cancel')
            Мы сожалеем, что процесс перевода был отменен. Ваш заказ не входит в наши услуги.
            Спасибо за Ваше понимание.
        @endif
    </p>
    Ссылка: <br>
    <a href="{{url('/check')}}">{{url('/check')}}</a>
    <br>
    Пароль: <br>
    {{$offer->uuid}} <br><br>
    Хорошего дня. <br>
    С уважением. <br>

    <i>lingualline</i><br><br>


    <p>Sayın {{$offer->user_name}},</p>
    <p>
        @if($offer->status === 'prepare')
            Dosyanız bize ulaşmıştır. Aşağıdaki bağlantıyı ve şifreyi kullanarak talep durumunuzu öğrenebilirsiniz.  İlk olarak dosyanızın %5 tercüme edilmiş kısmını görebileceksiniz.
        @elseif($offer->status === 'wait_payment')
            Dosyanızın %5 kısmının çevirisi yapılmıştır. Aşağıdaki bağlantıyı ve şifreyi kullanarak görebilirsiniz. Eğer çeviri kalitesi ve ücreti sizin için uygunsa, hizmet bedelini göndermeniz beklenmekte ve sonradan çeviri süreci devam ettirilecektir. Tercüme edilmiş dosyanızın tümüne maksimum 5 saat içerisinde ulaşabileceksiniz.
        @elseif($offer->status === 'translating')
            Hizmet ücreti kabul edilmiştir. Çeviri dosyanız maksimum 5 saat içerisinde teslim edilecektir.
        @elseif($offer->status === 'completed')
            Belgenizin tümünün çevirisi yapılmıştır. Aşağıdaki bağlantıyı ve şifreyi kullanarak erişebilirsiniz. Sizinle çalıştığımıza memnun olduk.
        @elseif($offer->status === 'cancel')
            Üzgünüz ki, tercüme işlemi iptal edilmiştir. Talebiniz hizmetimiz dışındadir.<br>
            Anlayışınız icin teşekkür ederiz.
        @endif
    </p>
    Bağlantı: <br>
    <a href="{{url('/check')}}">{{url('/check')}}</a>
    <br>
    Şifre: <br>
    {{$offer->uuid}} <br><br>
    İyi günler. <br>
    Saygılarımızla. <br>

    <i>lingualline</i><br><br>

{{--    <div style="border: 1px solid gray; border-radius: 10px; padding: 10px;">--}}
{{--        <div style="border-bottom: 1px solid gray; color: #1e7e34;">--}}
{{--            <h1>Order information</h1>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <p>Order password number: {{$offer->uuid}}</p>--}}
{{--            <p>--}}
{{--                Order status:--}}
{{--                <span>--}}
{{--                    <?php--}}
{{--                    switch ($offer->status) {--}}
{{--                        case 'prepare':--}}
{{--                            echo "Prepare";--}}
{{--                            break;--}}
{{--                        case 'wait_payment':--}}
{{--                            echo "Waiting payment";--}}
{{--                            break;--}}
{{--                        case 'translating':--}}
{{--                            echo "Translating";--}}
{{--                            break;--}}
{{--                        case 'completed':--}}
{{--                            echo "Completed";--}}
{{--                            break;--}}
{{--                        case 'cancel':--}}
{{--                            echo "Canceled";--}}
{{--                            break;--}}
{{--                    }--}}
{{--                    ?>--}}
{{--                </span>--}}
{{--            </p>--}}
{{--            <p>Translate from {{$offer->from}} to {{$offer->to}}</p>--}}
{{--            <p>Original file: <a href="{{url("files/$offer->uuid/$offer->original_filepath")}}">{{$offer->original_filepath}}</a></p>--}}
{{--            @if(isset($offer->template_filepath) && $offer->status !== 'prepare')--}}
{{--                <p>Template file: <a href="{{url("files/$offer->uuid/$offer->template_filepath")}}">{{$offer->template_filepath}}</a></p>--}}
{{--            @endif--}}
{{--            @if(isset($offer->translate_filepath) && $offer->status === 'completed')--}}
{{--                <p>Translate file: <a href="{{url("files/$offer->uuid/$offer->translate_filepath")}}">{{$offer->translate_filepath}}</a></p>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
</main>
