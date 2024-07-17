import 'package:flutter/material.dart';
import 'package:flutter/gestures.dart';
import 'dart:ui';
import 'package:google_fonts/google_fonts.dart';
import 'package:myapp/utils.dart';

class Scene extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    double baseWidth = 252;
    double fem = MediaQuery.of(context).size.width / baseWidth;
    double ffem = fem * 0.97;
    return Container(
      width: double.infinity,
      child: Container(
        // frame1d8h (1:2)
        padding: EdgeInsets.fromLTRB(48*fem, 80*fem, 48*fem, 123*fem),
        width: double.infinity,
        decoration: BoxDecoration (
          color: Color(0xff6dab53),
        ),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.center,
          children: [
            Container(
              // casquette1dgR (2:16)
              margin: EdgeInsets.fromLTRB(0*fem, 0*fem, 0*fem, 35*fem),
              width: 156*fem,
              height: 121*fem,
              child: Image.asset(
                'assets/page-1/images/casquette-1.png',
                fit: BoxFit.cover,
              ),
            ),
            Container(
              // worksmartnothardihs (2:13)
              margin: EdgeInsets.fromLTRB(0*fem, 0*fem, 0*fem, 39*fem),
              constraints: BoxConstraints (
                maxWidth: 145*fem,
              ),
              child: Text(
                'WORK SMART NOT HARD',
                textAlign: TextAlign.center,
                style: SafeGoogleFont (
                  'Inter',
                  fontSize: 20*ffem,
                  fontWeight: FontWeight.w700,
                  height: 1.2125*ffem/fem,
                  color: Color(0xfff9ffd8),
                ),
              ),
            ),
            Container(
              // autogroupk5wvYB7 (22U3DCfzELkxDDqZ1xk5WV)
              margin: EdgeInsets.fromLTRB(11*fem, 0*fem, 10*fem, 0*fem),
              width: double.infinity,
              height: 26*fem,
              decoration: BoxDecoration (
                color: Color(0xfffffafa),
              ),
              child: Center(
                child: Text(
                  'COMMENCER',
                  textAlign: TextAlign.center,
                  style: SafeGoogleFont (
                    'Inter',
                    fontSize: 15*ffem,
                    fontWeight: FontWeight.w700,
                    height: 1.2125*ffem/fem,
                    color: Color(0xff6dab53),
                  ),
                ),
              ),
            ),
          ],
        ),
      ),
          );
  }
}