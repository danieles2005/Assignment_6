#!/usr/bin/python3
import cgi


gifts = [
    "Book", "Toy", "Gadget", "Video Game", "Headphones", "Smartphone", 
    "Laptop", "Watch", "Shoes", "Wallet", "Headset", "Camera", 
    "Drone", "Smart Watch", "Bluetooth Speaker"
]


def display_gifts():
    html = "<html><body>"
    html += "<h2>Available Gifts:</h2>"
    for idx, gift in enumerate(gifts):
        html += f"<p>{idx}: {gift}</p>"
    html += """
    <form method="get">
        <label for="gifts">Enter gift indices separated by commas (e.g., 0, 2):</label>
        <input type="text" id="gifts" name="gifts">
        <input type="submit" value="Get Gift Code">
    </form>
    """
    return html

def calculate_gift_code(indices):
    gift_code = 0
    for index in indices:
        gift_code |= (1 << index) 
    return gift_code


form = cgi.FieldStorage()
selected_indices = form.getvalue('gifts', '')


html_output = display_gifts()
if selected_indices:
    indices = [int(i) for i in selected_indices.split(',')]
    selected_gifts = [gifts[i] for i in indices]
    gift_code = calculate_gift_code(indices)
    html_output += f"<h3>Selected Gifts: {', '.join(selected_gifts)}</h3>"
    html_output += f"<h3>Unique Gift Code: {gift_code}</h3>"

html_output += "</body></html>"


print("Content-Type: text/html\n")
print(html_output)

