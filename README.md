# The Ultimate websocket App
This project illustrates how to use WebSocket in Hypertext Processor (PHP) using the Ratchet library. It's a simple chat/messaging app that demonstrates the benefits of WebSocket over traditional polling, where the HTTP protocol remains open, allowing real-time updates without the need for constant refreshing.

## Problem Solving
### Traditional Polling
Traditional polling involves sending requests to the server at regular intervals to check for updates. This approach has several disadvantages:

1. Increased Server Load: Constantly sending requests to the server increases its load and can lead to performance issues.
2. Higher Latency: There is a delay between the time when data is updated on the server and when it is received by the client.
3. Inefficiency: Many requests return without any new data, leading to unnecessary network traffic.
   
### WebSocket Solution
WebSocket solves these issues by maintaining an open connection between the client and server:

1. Real-Time Updates: The server can push updates to the client instantly, reducing latency.
2. Reduced Server Load: Fewer requests are sent since the connection remains open, leading to more efficient use of resources.
3. Efficient Communication: Data is sent only when there are updates, reducing unnecessary network traffic.

## Features
1. Send messages instantly to other users.
2. Generate profile avatars and usernames, stored in the database.
3. Real-time availability of users for chatting.

## Getting Started
### To use this project:

1. Install the Ratchet PHP library for WebSocketing.
2. Import the provided database located in the database/ folder.
3. Run the WebSocket server script (server.php) found under the async/ folder using the console.
   
## Usage
1. Clone the repository to your local environment.
2. Install Composer dependencies using composer install.
3. Import the database from the database/ folder.
4. Navigate to the async/ folder and run php server.php in your terminal to start the WebSocket server.
5. Open the project in your web browser to start using the chat app.

## Screenshots
## Dependencies
Ratchet PHP Library - For WebSocket functionality.
