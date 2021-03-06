<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kriptografi - BCrypt Gen</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" />
  <link rel="stylesheet" href="/css/main.css" />
</head>
<body class="bg-gray-900 text-white">
  <nav class="border-b border-gray-800">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
      <ul class="flex flex-col md:flex-row items-center">
        <li>
          <a href="#">
            <svg class="w-64" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 233.13 35.16"><defs><style>.a{fill:#fff;}</style></defs><title>BcryptGen</title><rect class="a" x="22.63" y="-2.67" width="4.53" height="25.13" rx="1.38" ry="1.38" transform="translate(49.48 -0.72) rotate(135)"/><path class="a" d="M26.52,26l-8.75,8.75a1.38,1.38,0,0,1-1.95,0l-2-2a1.38,1.38,0,0,1,0-1.95L18.63,26a1.38,1.38,0,0,0,0-1.95l-3.43-3.43a1.38,1.38,0,0,0-1.95,0L8.41,25.42a1.38,1.38,0,0,1-1.95,0l-2-2a1.38,1.38,0,0,1,0-1.95l8.75-8.75a1.38,1.38,0,0,1,1.95,0L26.52,24.08A1.38,1.38,0,0,1,26.52,26Z"/><path class="a" d="M3.66,20.68l9.58-9.58a1.38,1.38,0,0,1,1.95,0L27.35,23.25a1.38,1.38,0,0,0,1.95,0l1.19-1.19a1.38,1.38,0,0,0,0-1.95L14.67,4.29a1.38,1.38,0,0,0-1.95,0L0,17A1.38,1.38,0,0,0,0,19l1.71,1.71A1.38,1.38,0,0,0,3.66,20.68Z"/><path class="a" d="M45.86,10.5H50.3a8.56,8.56,0,0,1,4.41.86,3,3,0,0,1,1.37,2.75,3.46,3.46,0,0,1-.6,2.1,2.4,2.4,0,0,1-1.6,1v.1a3.14,3.14,0,0,1,2,1.13,3.69,3.69,0,0,1,.6,2.21,3.64,3.64,0,0,1-1.41,3,6.1,6.1,0,0,1-3.83,1.09H45.86Zm3,5.65h1.76a3.21,3.21,0,0,0,1.78-.38A1.42,1.42,0,0,0,53,14.51a1.26,1.26,0,0,0-.6-1.18,3.86,3.86,0,0,0-1.9-.36H48.89Zm0,2.4v3.72h2a2.93,2.93,0,0,0,1.85-.48,1.77,1.77,0,0,0,.6-1.46q0-1.78-2.54-1.78Z"/><path class="a" d="M63.5,25q-5.1,0-5.1-5.6a6,6,0,0,1,1.39-4.25,5.2,5.2,0,0,1,4-1.47,7.57,7.57,0,0,1,3.4.74l-.88,2.3q-.7-.28-1.31-.46a4.23,4.23,0,0,0-1.21-.18q-2.32,0-2.32,3.3t2.32,3.2a5.29,5.29,0,0,0,1.59-.23,5.77,5.77,0,0,0,1.46-.72v2.55a4.81,4.81,0,0,1-1.46.63A8.21,8.21,0,0,1,63.5,25Z"/><path class="a" d="M75.44,13.65a4.8,4.8,0,0,1,1,.09l-.22,2.79a3.4,3.4,0,0,0-.88-.1,3.16,3.16,0,0,0-2.22.73,2.65,2.65,0,0,0-.8,2.05v5.56h-3V13.86H71.6L72,15.69h.15a4.1,4.1,0,0,1,1.37-1.48A3.39,3.39,0,0,1,75.44,13.65Z"/><path class="a" d="M76.87,13.86h3.26L82.19,20a8.54,8.54,0,0,1,.36,1.89h.06A8.37,8.37,0,0,1,83,20l2-6.14h3.19L83.62,26.17a5.33,5.33,0,0,1-1.81,2.56,4.57,4.57,0,0,1-2.75.85,6.93,6.93,0,0,1-1.51-.17V27a5.08,5.08,0,0,0,1.17.13,2.12,2.12,0,0,0,1.38-.48A3.14,3.14,0,0,0,81,25.23l.18-.54Z"/><path class="a" d="M95.8,25a3.62,3.62,0,0,1-3-1.4h-.16q.16,1.37.16,1.58v4.42h-3V13.86h2.42l.42,1.42h.14a3.44,3.44,0,0,1,3.1-1.62,3.54,3.54,0,0,1,3,1.49A6.91,6.91,0,0,1,100,19.3a8.2,8.2,0,0,1-.51,3,4.26,4.26,0,0,1-1.46,2A3.74,3.74,0,0,1,95.8,25ZM94.92,16a1.88,1.88,0,0,0-1.61.68A3.89,3.89,0,0,0,92.78,19v.32a4.6,4.6,0,0,0,.52,2.52,1.87,1.87,0,0,0,1.66.76q2,0,2-3.3a4.71,4.71,0,0,0-.49-2.42A1.68,1.68,0,0,0,94.92,16Z"/><path class="a" d="M107.06,22.6a6.47,6.47,0,0,0,1.88-.34v2.22a6.68,6.68,0,0,1-2.73.5,3.35,3.35,0,0,1-2.6-.9,3.93,3.93,0,0,1-.82-2.71V16.09h-1.43V14.83l1.64-1,.86-2.3h1.9v2.32h3.06v2.24h-3.06v5.26a1.16,1.16,0,0,0,.36.94A1.4,1.4,0,0,0,107.06,22.6Z"/><path class="a" d="M116.8,16.76h5.66v7.4a15.9,15.9,0,0,1-2.59.63,16.93,16.93,0,0,1-2.49.18,6.29,6.29,0,0,1-4.94-1.9,7.9,7.9,0,0,1-1.7-5.45,7.19,7.19,0,0,1,2-5.39,7.51,7.51,0,0,1,5.48-1.93,10.61,10.61,0,0,1,4.24.88l-1,2.42a7.19,7.19,0,0,0-3.25-.78A4,4,0,0,0,115,14.13a5.11,5.11,0,0,0-1.18,3.54,5.69,5.69,0,0,0,1,3.55,3.29,3.29,0,0,0,2.77,1.23,9.82,9.82,0,0,0,1.92-.2v-3H116.8Z"/><path class="a" d="M130.57,25a5.64,5.64,0,0,1-4.12-1.46A5.51,5.51,0,0,1,125,19.39a6.06,6.06,0,0,1,1.37-4.24,4.89,4.89,0,0,1,3.79-1.5,4.81,4.81,0,0,1,3.6,1.32A5,5,0,0,1,135,18.61v1.45h-7a2.87,2.87,0,0,0,.75,2,2.64,2.64,0,0,0,2,.71,8.19,8.19,0,0,0,1.87-.21,9.3,9.3,0,0,0,1.84-.65v2.3a7,7,0,0,1-1.67.58A10.53,10.53,0,0,1,130.57,25Zm-.42-9.2a1.89,1.89,0,0,0-1.48.6,2.78,2.78,0,0,0-.62,1.7h4.18a2.48,2.48,0,0,0-.58-1.7A2,2,0,0,0,130.15,15.77Z"/><path class="a" d="M147.52,24.77h-3V18.4a3.06,3.06,0,0,0-.42-1.77,1.53,1.53,0,0,0-1.34-.59,2,2,0,0,0-1.81.83,5.18,5.18,0,0,0-.56,2.77v5.14h-3V13.86h2.28l.4,1.4h.17a3.15,3.15,0,0,1,1.37-1.2,4.67,4.67,0,0,1,2-.41,3.82,3.82,0,0,1,2.89,1,4.13,4.13,0,0,1,1,3Z"/><path class="a" d="M161.86,13.65a3.53,3.53,0,0,1,3,1.51A6.92,6.92,0,0,1,166,19.3a6.8,6.8,0,0,1-1.13,4.19,3.94,3.94,0,0,1-6.09.09h-.21l-.5,1.2h-2.28V9.58h3v3.54q0,.67-.12,2.16h.12A3.44,3.44,0,0,1,161.86,13.65Zm-1,2.38a1.88,1.88,0,0,0-1.61.68,3.89,3.89,0,0,0-.53,2.24v.32a4.6,4.6,0,0,0,.52,2.52,1.87,1.87,0,0,0,1.66.76,1.66,1.66,0,0,0,1.46-.84,4.57,4.57,0,0,0,.54-2.46,4.33,4.33,0,0,0-.55-2.42A1.71,1.71,0,0,0,160.9,16Z"/><path class="a" d="M166.88,13.86h3.26L172.2,20a8.54,8.54,0,0,1,.36,1.89h.06A8.37,8.37,0,0,1,173,20l2-6.14h3.19l-4.62,12.31a5.33,5.33,0,0,1-1.81,2.56,4.57,4.57,0,0,1-2.75.85,6.93,6.93,0,0,1-1.51-.17V27a5.08,5.08,0,0,0,1.17.13,2.12,2.12,0,0,0,1.38-.48,3.14,3.14,0,0,0,.92-1.46l.18-.54Z"/><path class="a" d="M188.22,24.77h-3V10.5h8.18V13h-5.21v3.68h4.84v2.47h-4.84Z"/><path class="a" d="M202.92,24.77l-.58-1.48h-.08a4.4,4.4,0,0,1-1.55,1.31,5,5,0,0,1-2.08.37,3.36,3.36,0,0,1-2.48-.9,3.45,3.45,0,0,1-.9-2.56,2.88,2.88,0,0,1,1.22-2.56,7,7,0,0,1,3.67-.91L202,18V17.5a1.49,1.49,0,0,0-1.7-1.66,7.75,7.75,0,0,0-3.08.79l-1-2a8.88,8.88,0,0,1,4.18-1,5.21,5.21,0,0,1,3.37,1A3.54,3.54,0,0,1,205,17.5v7.28ZM202,19.72l-1.15,0a3.69,3.69,0,0,0-1.93.47,1.47,1.47,0,0,0-.63,1.31q0,1.26,1.45,1.26a2.29,2.29,0,0,0,1.66-.6,2.09,2.09,0,0,0,.62-1.58Z"/><path class="a" d="M207.19,29.58a6.92,6.92,0,0,1-2-.24V27a5.29,5.29,0,0,0,1.4.19,1.34,1.34,0,0,0,1.1-.42,1.91,1.91,0,0,0,.35-1.24V13.86h3V26a3.49,3.49,0,0,1-1,2.68A4,4,0,0,1,207.19,29.58ZM207.94,11q0-1.45,1.62-1.46T211.18,11a1.42,1.42,0,0,1-.41,1.08,1.71,1.71,0,0,1-1.22.39Q207.94,12.5,207.94,11Z"/><path class="a" d="M221.1,24.77l-.58-1.48h-.08a4.4,4.4,0,0,1-1.55,1.31,5,5,0,0,1-2.08.37,3.36,3.36,0,0,1-2.48-.9,3.45,3.45,0,0,1-.9-2.56,2.88,2.88,0,0,1,1.22-2.56,7,7,0,0,1,3.67-.91l1.89-.06V17.5a1.49,1.49,0,0,0-1.7-1.66,7.75,7.75,0,0,0-3.08.79l-1-2a8.88,8.88,0,0,1,4.18-1,5.21,5.21,0,0,1,3.37,1,3.54,3.54,0,0,1,1.17,2.91v7.28Zm-.88-5.06-1.15,0a3.69,3.69,0,0,0-1.93.47,1.47,1.47,0,0,0-.63,1.31q0,1.26,1.45,1.26a2.29,2.29,0,0,0,1.66-.6,2.09,2.09,0,0,0,.62-1.58Z"/><path class="a" d="M232.34,13.65a4.8,4.8,0,0,1,1,.09l-.22,2.79a3.4,3.4,0,0,0-.88-.1,3.16,3.16,0,0,0-2.22.73,2.65,2.65,0,0,0-.8,2.05v5.56h-3V13.86h2.26l.44,1.84h.15a4.1,4.1,0,0,1,1.37-1.48A3.39,3.39,0,0,1,232.34,13.65Z"/></svg>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  @if (isset($response) && $response)
  <div class="mt-16 text-center">
    <div class="p-2">
      <div class="inline-flex items-center bg-gray-800 leading-none text-{{ $response['colour'] }}-600 rounded-full p-2 shadow text-teal text-sm">
        <span class="inline-flex bg-{{ $response['colour'] }}-600 text-white rounded-full h-6 px-3 justify-center items-center">{{ $response['title'] }}</span>
        <span class="inline-flex px-2">{{ $response['subtitle'] }}</span>
      </div>
    </div>
  </div>
  @endif

  <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row h-auto">

    <div class="encrypt w-1/2 sm:w-full md:w-full lg:w-32 xl:w-3/4">
      <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Encrypt</h2>
      <p>Encrypt some text. The result shown will be a Bcrypt encrypted hash.</p>
      <form class="my-4" method="POST" action="/">
        @csrf
        <div>
          <input name="string" class="rounded-l-lg p-4 border-t mr-0 border-b border-l border-gray-500 bg-gray-800 w-64" placeholder="String to encrypt" />
          <button class="px-8 rounded-r-lg bg-orange-500 text-gray-800 font-bold p-4 uppercase border-orange-700 border-t border-b border-r" value="encrypt" name="action" type="submit">Encrypt</button>
        </div>
        <div class="my-4">
          <input class="rounded-l-lg p-4 border-t mr-0 border-b border-l border-gray-500 bg-gray-800 w-64" name="rounds" type="number" value="{{ isset($_POST['rounds']) ? $_POST['rounds'] : '12' }}" min="4" max="18" />
          <button class="px-8 rounded-r-lg bg-orange-800 text-gray-900 font-bold p-4 uppercase border-orange-800 border-t border-b border-r cursor-not-allowed" disabled>Rounds</button>
        </div>
      </form>
    </div>

    <div class="decypt w-1/2 sm:w-full md:w-full lg:w-32 xl:w-3/4">
      <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Decrypt</h2>
      <p>Test your Bcrypt hash against some plaintext, to see if they match.</p>
      <form class="my-4" method="POST" action="/">
        @csrf
        <div>
          <input class="rounded-lg p-4 border border-gray-500 bg-gray-800 w-64" name="hash" type="text" placeholder="Hash to check" />
        </div>
        <div class="my-4">
          <input name="string" class="rounded-l-lg p-4 border-t mr-0 border-b border-l border-gray-500 bg-gray-800 w-64" type="text" placeholder="String to check against" aria-label="String to check against" />
          <button class="px-8 rounded-r-lg bg-orange-500 text-gray-800 font-bold p-4 uppercase border-orange-700 border-t border-b border-r" value="decrypt" name="action" type="submit">Check!</button>
        </div>
      </form>
    </div>

  </div>
  <footer class="border border-t border-gray-800">
    <div class="container mx-auto text-sm px-4 py-6">
      Made for Cryptography assignment by <a href="http://fajar13k.github.io/portfolio" class="underline hover:text-gray-300">Fajar Nazmi Fadillah (fajar13k)</a>
    </div>
  </footer>
</body>
</html>