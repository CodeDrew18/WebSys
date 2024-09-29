import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      home: MainScreen()
    );
  }
}

class MainScreen extends StatefulWidget {
  const MainScreen({super.key});

  @override
  State<MainScreen> createState() => _MainScreenState();
}

class _MainScreenState extends State<MainScreen> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
        body: Center(
          child: Column(
            children: [
              Row(
                mainAxisAlignment: MainAxisAlignment.spaceBetween,
                children: [
                  Container(
                    color: Colors.blue,
                    width: 100,
                    height: 100,
                  ),

                  Container(
                    color: Colors.red,
                    width: 100,
                    height: 100,
                  ),
                ],
              ),

              Spacer(),
              Container(
                color: Colors.black,
                width: 100,
                height: 100,
              ),

              Spacer(),
              Row(
                mainAxisAlignment: MainAxisAlignment.spaceBetween,
                children: [
                  Container(
                    color: Colors.yellow,
                    width: 100,
                    height: 100,
                  ),
                  Container(
                    color: Colors.brown,
                    width: 100,
                    height: 100,
                  ),
                ],
              ),
            ],
          ),
        ),
      );
  }
}
