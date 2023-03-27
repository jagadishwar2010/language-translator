<!DOCTYPE html>
<html>
<head>
    <title>Language Translation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .container {
            /*margin-top: 50px;*/
        }

        .card-header {
            background-color: #f8f9fa;
            font-weight: bold;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Language Translation</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="source-text">Source Text</label>
                        <textarea id="source-text" name="source_text" class="form-control" rows="5" placeholder="Enter text to translate"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="target-language">Target Language</label>
                        <select id="target-language" name="target_language" class="form-control">
                            <option value="de">German</option>
                            <option value="fr">French</option>
                            <option value="es">Spanish</option>
                            <option value="it">Italian</option>
                            <option value="pt">Portuguese</option>
                            <option value="ja">Japanese</option>
                            <option value="zh">Chinese</option>

{{--                            <option value="af">Afrikaans</option>--}}
{{--                            <option value="sq">Albanian</option>--}}
{{--                            <option value="am">Amharic</option>--}}
{{--                            <option value="ar">Arabic</option>--}}
{{--                            <option value="hy">Armenian</option>--}}
{{--                            <option value="az">Azerbaijani</option>--}}
{{--                            <option value="eu">Basque</option>--}}
{{--                            <option value="be">Belarusian</option>--}}
{{--                            <option value="bn">Bengali</option>--}}
{{--                            <option value="bs">Bosnian</option>--}}
{{--                            <option value="bg">Bulgarian</option>--}}
{{--                            <option value="ca">Catalan</option>--}}
{{--                            <option value="ceb">Cebuano</option>--}}
{{--                            <option value="ny">Chichewa</option>--}}
{{--                            <option value="zh">Chinese (Simplified)</option>--}}
{{--                            <option value="zh-TW">Chinese (Traditional)</option>--}}
{{--                            <option value="co">Corsican</option>--}}
{{--                            <option value="hr">Croatian</option>--}}
{{--                            <option value="cs">Czech</option>--}}
{{--                            <option value="da">Danish</option>--}}
{{--                            <option value="nl">Dutch</option>--}}
{{--                            <option value="en">English</option>--}}
{{--                            <option value="eo">Esperanto</option>--}}
{{--                            <option value="et">Estonian</option>--}}
{{--                            <option value="tl">Filipino</option>--}}
{{--                            <option value="fi">Finnish</option>--}}
{{--                            <option value="fr">French</option>--}}
{{--                            <option value="fy">Frisian</option>--}}
{{--                            <option value="gl">Galician</option>--}}
{{--                            <option value="ka">Georgian</option>--}}
{{--                            <option value="de">German</option>--}}
{{--                            <option value="el">Greek</option>--}}
{{--                            <option value="gu">Gujarati</option>--}}
{{--                            <option value="ht">Haitian Creole</option>--}}
{{--                            <option value="ha">Hausa</option>--}}
{{--                            <option value="haw">Hawaiian</option>--}}
{{--                            <option value="iw">Hebrew</option>--}}
{{--                            <option value="hi">Hindi</option>--}}
{{--                            <option value="hmn">Hmong</option>--}}
{{--                            <option value="hu">Hungarian</option>--}}
{{--                            <option value="is">Icelandic</option>--}}
{{--                            <option value="ig">Igbo</option>--}}
{{--                            <option value="id">Indonesian</option>--}}
{{--                            <option value="ga">Irish</option>--}}
{{--                            <option value="it">Italian</option>--}}
{{--                            <option value="ja">Japanese</option>--}}
{{--                            <option value="jw">Javanese</option>--}}
{{--                            <option value="kn">Kannada</option>--}}
{{--                            <option value="kk">Kazakh</option>--}}
{{--                            <option value="km">Khmer</option>--}}
{{--                            <option value="ko">Korean</option>--}}
{{--                            <option value="ku">Kurdish (Kurmanji)</option>--}}
{{--                            <option value="ky">Kyrgyz</option>--}}
{{--                            <option value="lo">Lao</option>--}}
{{--                            <option value="la">Latin</option>--}}
{{--                            <option value="lv">Latvian</option>--}}
{{--                            <option value="lt">Lithuanian</option>--}}
{{--                            <option value="lb">Luxembourgish</option>--}}
{{--                            <option value="mk">Macedonian</option>--}}
{{--                            <option value="mg">Malagasy</option>--}}
{{--                            <option value="ms">Malay</option>--}}
{{--                            <option value="ml">Malayalam</option>--}}
{{--                            <option value="mt">Maltese</option>--}}
{{--                            <option value="mi">Maori</option>--}}
{{--                            <option value="mr">Marathi</option>--}}
{{--                            <option value="mn">Mongolian</option>--}}
{{--                            <option value="my">Myanmar (Burmese)</option>--}}
{{--                            <option value="ne">Nepali</option>--}}
{{--                            <option value="no">Norwegian</option>--}}
{{--                            <option value="or">Odia (Oriya)</option>--}}
{{--                            <option value="ps">Pashto</option>--}}
{{--                            <option value="fa">Persian</option>--}}
{{--                            <option value="pl">Polish</option>--}}
{{--                            <option value="pt">Portuguese</option>--}}
{{--                            <option value="pa">Punjabi</option>--}}
{{--                            <option value="ro">Romanian</option>--}}
{{--                            <option value="ru">Russian</option>--}}
{{--                            <option value="sm">Samoan</option>--}}
{{--                            <option value="gd">Scots Gaelic</option>--}}
{{--                            <option value="sr">Serbian</option>--}}
{{--                            <option value="st">Sesotho</option>--}}
{{--                            <option value="sn">Shona</option>--}}
{{--                            <option value="sd">Sindhi</option>--}}
{{--                            <option value="si">Sinhala</option>--}}
{{--                            <option value="sk">Slovak</option>--}}
{{--                            <option value="sl">Slovenian</option>--}}
{{--                            <option value="so">Somali</option>--}}
{{--                            <option value="es">Spanish</option>--}}
{{--                            <option value="su">Sundanese</option>--}}
{{--                            <option value="sw">Swahili</option>--}}
{{--                            <option value="sv">Swedish</option>--}}
{{--                            <option value="tg">Tajik</option>--}}
{{--                            <option value="ta">Tamil</option>--}}
{{--                            <option value="tt">Tatar</option>--}}
{{--                            <option value="te">Telugu</option>--}}
{{--                            <option value="th">Thai</option>--}}
{{--                            <option value="tr">Turkish</option>--}}
{{--                            <option value="tk">Turkmen</option>--}}
{{--                            <option value="uk">Ukrainian</option>--}}
{{--                            <option value="ur">Urdu</option>--}}
{{--                            <option value="ug">Uyghur</option>--}}
{{--                            <option value="uz">Uzbek</option>--}}
{{--                            <option value="vi">Vietnamese</option>--}}
{{--                            <option value="cy">Welsh</option>--}}
{{--                            <option value="xh">Xhosa</option>--}}
{{--                            <option value="yi">Yiddish</option>--}}
{{--                            <option value="yo">Yoruba</option>--}}
{{--                            <option value="zu">Zulu</option>--}}
                        </select>
                    </div>

                    <button id="translate-btn" type="button" class="btn btn-primary">Translate</button>

                    <div class="form-group mt-3">
                        <label for="translated-text">Translated Text</label>
                        <textarea id="translated-text" name="translated_text" class="form-control" rows="5" readonly></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#translate-btn').click(function() {
            var sourceText = $('#source-text').val().trim();
            var targetLanguage = $('#target-language').val();

            if (sourceText.length == 0) {
                alert('Please enter some text to translate.');
                return;
            }

            $('#translate-btn').prop('disabled', true);
            $('#translated-text').val('');

            $.ajax({
                type: 'POST',
                url: '{{ route("translate") }}',
                data: {
                    'source_text': sourceText,
                    'target_language': targetLanguage,
                    '_token': '{{ csrf_token() }}'
                },
                success: function(response) {
                    $('#translated-text').val(response);
                },
                error: function(error) {
                    alert('Error occurred while translating text: ' + error.responseText);
                },
                complete: function() {
                    $('#translate-btn').prop('disabled', false);
                }
            });
        });
    });
</script>

</body>
</html>
