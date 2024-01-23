package com.example.webapp;

import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;

public class ErrorController extends HttpServlet {

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        response.setContentType("text/html");
        PrintWriter out = response.getWriter();

        // 设置HTTP状态码为404
        response.setStatus(HttpServletResponse.SC_NOT_FOUND);

        // 输出HTML内容
        out.println("<html>");
        out.println("<head>");
        out.println("<title>404 - 页面未找到</title>");
        out.println("</head>");
        out.println("<body>");
        out.println("<h1>404 - 页面未找到</h1>");
        out.println("<p>您请求的页面似乎不存在。请检查链接是否正确，或者尝试访问主页。</p>");
        out.println("<a href='/'>返回主页</a>");
        out.println("</body>");
        out.println("</html>");
    }
}