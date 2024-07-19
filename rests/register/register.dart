var headers = {
  'Cookie': 'XSRF-TOKEN=eyJpdiI6IlhMS2NrT2ZoMnNKQkQ3a3lMSCt4dmc9PSIsInZhbHVlIjoiZTlDKzJCVGVKTUhySngzT2xDNzdPdU9uOER2ejE1S1EwVFRaeDJyT2FUMlg3S0c3QjF5UlZoSzMxMUE4S1V0TE80YkpTVlVRcU5yU09lTklvZWRnbTlOamZPTUFiK0FqR2dNZ2JzeDQ0SHB3U2p5bWVGS0VVVU9veThBN0tQdFciLCJtYWMiOiI3ZmM5NTliNjg4NTgzZTA1NmVjMjkyYTk5MWRkMDFiNTIyZDJhNzFjNGE3ODExOTgyNTlhZDhlZmZmN2JjNTFmIiwidGFnIjoiIn0%3D; nsansawellness_session=eyJpdiI6IjZtSk9BYWF0a29sOUFoSWt0L0EwQUE9PSIsInZhbHVlIjoieHpmVzZCSDNLNWhSUVV5WjZ2YnpDN3J0ZlpUTnloQVBnNXptcDFhaG5DWmorVTdDVTNYSVNhaWJWay81cHJMdE1KdnJDV0lHeWkzMFA1c1U5MjZQelNSSlhMaCtaQjlFRENCa1VVQ1U3Wm9PQlI3OHZ0enBESzUvbzg1S040QzQiLCJtYWMiOiJlZjFjNTZhZmY1ZDk1Mjg1ODdiM2VkNzNhZWIxNGM3ZThiM2Q0NDZhZmJkOGNiYTg4MDBlMmRmNjdhNmEwNzRjIiwidGFnIjoiIn0%3D'
};
var request = http.Request('POST', Uri.parse('http://localhost/nsansaBeta/api/register?fname=Tristan&lname=Nyeleti&email=roadoc404@gmail.com&role=patient&type=patient&guest_id=iurixx-euieur938943jkje9r89es9e&password=peace2me'));

request.headers.addAll(headers);

http.StreamedResponse response = await request.send();

if (response.statusCode == 200) {
  print(await response.stream.bytesToString());
}
else {
  print(response.reasonPhrase);
}
