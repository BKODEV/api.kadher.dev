<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nouveau message — kadher.dev</title>
  <style>
    body { margin: 0; padding: 0; background: #f4f4f5; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; color: #18181b; }
    .wrapper { max-width: 600px; margin: 40px auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 1px 4px rgba(0,0,0,.08); }
    .header { background: #18181b; padding: 32px 40px; }
    .header h1 { margin: 0; font-size: 20px; font-weight: 600; color: #ffffff; letter-spacing: -.3px; }
    .header p { margin: 4px 0 0; font-size: 13px; color: #a1a1aa; }
    .body { padding: 32px 40px; }
    .field { margin-bottom: 24px; }
    .field label { display: block; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: .08em; color: #71717a; margin-bottom: 4px; }
    .field .value { font-size: 15px; color: #18181b; line-height: 1.5; }
    .field .value a { color: #2563eb; text-decoration: none; }
    .message-box { background: #f4f4f5; border-radius: 6px; padding: 16px 20px; font-size: 15px; line-height: 1.7; white-space: pre-wrap; }
    .divider { border: none; border-top: 1px solid #e4e4e7; margin: 8px 0 24px; }
    .footer { padding: 20px 40px; background: #fafafa; border-top: 1px solid #e4e4e7; font-size: 12px; color: #a1a1aa; text-align: center; }
  </style>
</head>
<body>
  <div class="wrapper">
    <div class="header">
      <h1>Nouveau message de contact</h1>
      <p>kadher.dev — portfolio</p>
    </div>

    <div class="body">
      <div class="field">
        <label>Nom</label>
        <div class="value">{{ $data['nom'] }}</div>
      </div>

      <div class="field">
        <label>E-mail</label>
        <div class="value">
          <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>
        </div>
      </div>

      @if (!empty($data['entreprise']))
      <div class="field">
        <label>Entreprise</label>
        <div class="value">{{ $data['entreprise'] }}</div>
      </div>
      @endif

      <div class="field">
        <label>Sujet</label>
        <div class="value">{{ $data['sujet'] }}</div>
      </div>

      <hr class="divider" />

      <div class="field">
        <label>Message</label>
        <div class="message-box">{{ $data['message'] }}</div>
      </div>
    </div>

    <div class="footer">
      Répondre directement à cet e-mail pour contacter {{ $data['nom'] }}.
    </div>
  </div>
</body>
</html>
