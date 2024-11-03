from django.shortcuts import render
from django.contrib.auth.models import User
from django.db import models
from .models import Course

def course_statistics(request):
    # Menghitung jumlah pembuat kursus
    creators_count = User.objects.filter(created_courses__isnull=False).distinct().count()
    
    # Menghitung jumlah pengguna yang tidak memiliki kursus
    users_without_courses_count = User.objects.exclude(created_courses__isnull=False).count()
    
    # Menghitung rata-rata jumlah kursus yang diikuti per pengguna
    average_courses_per_user = Course.objects.all().count() / User.objects.count() if User.objects.count() > 0 else 0
    
    # Menghitung pengguna yang mengikuti kursus terbanyak
    users_with_most_courses = User.objects.annotate(course_count=models.Count('enrolled_courses')).order_by('-course_count').first()
    
    # Menghitung pengguna yang tidak mengikuti kursus sama sekali
    users_without_courses = User.objects.exclude(enrolled_courses__isnull=False)
    
    context = {
        'creators_count': creators_count,
        'users_without_courses_count': users_without_courses_count,
        'average_courses_per_user': average_courses_per_user,
        'users_with_most_courses': users_with_most_courses,
        'users_without_courses': users_without_courses,
    }
    
    return render(request, 'courses/course_statistics.html', context)
