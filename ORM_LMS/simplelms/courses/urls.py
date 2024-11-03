# courses/urls.py

from django.urls import path
from .views import course_statistics

urlpatterns = [
    path('statistics/', course_statistics, name='course_statistics'),
]
