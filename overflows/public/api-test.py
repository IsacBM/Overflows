import requests

url = "http://localhost:2358/submissions/?base64_encoded=false&wait=true"
headers = {"Content-Type": "application/json"}
data = {
    "source_code": "print('Hello, World!')",
    "language_id": 70,
    "stdin": "",
    "expected_output": "Hello, World!",
}

response = requests.post(url, headers=headers, json=data)

if response.status_code == 200:
    result = response.json()
    print("Status:", result['status']['description'])
    print("Saída:", result.get('stdout'))
    print("Erros:", result.get('stderr'))
    print("Resposta detalhada:", response.json())

else:
    print("Erro ao enviar a submissão:", response.status_code)
    print("Resposta detalhada:", response.json())

